<?php

/**
 * main actions.
 *
 * @package    universidad
 * @subpackage main
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  public function preExecute()
  {
    $this->getUser()->setAttribute('MENU',5);  
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }
  
  public function executeIniciarTramite(sfWebRequest $request) {
      // Buscar Tramites
      // Aqui se debe cambiar por la Busqueda del ROL, quien se encuentra asignado
      $this->tramites = Doctrine::getTable('ClaTramite')->getTramites($this->getUser()->getAttribute('ROL'));
      if(count($this->tramites) == 1):
          $this->redirect('main/proceso?tramite_id='.$this->tramites[0]->getId());
      endif;
  }
  
  public function executeProceso(sfWebRequest $request) {
      $this->proceso = Doctrine::getTable('ClaProceso')->getProcesoInit($this->getUser()->getAttribute('ROL'),$request['tramite_id']);
      if(!empty($this->proceso)):
        $this->formularios = Doctrine::getTable('ClaFormulario')->getFormularios($request['tramite_id'], $this->proceso->getId());
      endif;
  }
  
  public function executeRegistro(sfWebRequest $request) {
        if ($request->isMethod('post')):
            echo 'llega aqui';
            die();
            $proceso = $request->getParameter('proceso');
            if (!empty($proceso)):
                // Preguntar si es proceso de inicio INIT
                if (Doctrine::getTable('ClaProceso')->isProcesoInit($proceso['tramite_id'], $proceso['proceso_id'])):
                    $conn = Doctrine_Manager::connection();
                    $conn->beginTransaction();
                    try {

                        // Guardar el Proceso
                        $seguimiento = new ProcSeguimiento();
                        $st = $conn->execute("select nextval('proc_seguimiento_id_seq')")->fetchAll();
                        $seguimiento->setId($st[0]['nextval']);
                        $seguimiento->setGestionId('2013');
                        $seguimiento->setClaTramiteId($proceso['tramite_id']);
                        $seguimiento->setClaProcesoId($proceso['proceso_id']);
                        $seguimiento->setAdmUsuarioEntradaId($this->getUser()->getAttribute('USUARIO_ID'));
                        $seguimiento->setAdmUsuarioSalidaId($this->getUser()->getAttribute('USUARIO_ID'));
                        $seguimiento->setFechaIngresoId(date('Y-m-d h:i:s'));
                        $seguimiento->setFechaSalida(date('Y-m-d h:i:s'));
                        $seguimiento->setDatPersonasId('0');
                        $seguimiento->setRecibido(TRUE);
                        $seguimiento->save();
                        
                        // Recuperar los formularios y guardar
                        $formularios = Doctrine::getTable('ClaFormulario')->getFormularios($proceso['tramite_id'], $proceso['proceso_id']);
                        foreach ($formularios as $formulario):
                            if (strcmp($formulario->ClaTabla->getDescripcion(), 'dat_personas') == 0):
                                $form = new DatPersonasForm();
                            endif;
                            $form->bind($request->getParameter($formulario->ClaTabla->getDescripcion()));
                            if ($form->isValid()):
                                $data = $form->save();
                                if (strcmp($formulario->ClaTabla->getDescripcion(), 'dat_personas') == 0):
                                    $id = $data->getId();
                                endif;
                                $seguimiento_formulario = new ProcFormularios();
                                $seguimiento_formulario->setId($seguimiento->getId());
                                $seguimiento_formulario->setGestionId($seguimiento->getGestionId());
                                $seguimiento_formulario->setClaTramiteId($seguimiento->getClaTramiteId());
                                $seguimiento_formulario->setClaProcesoId($seguimiento->getClaProcesoId());
                                $seguimiento_formulario->setClaFormularioId($formulario->getId());
                                $seguimiento_formulario->setClaTablaId($formulario->ClaTabla->getId());
                                $seguimiento_formulario->setGetid($data->getId());
                                $seguimiento_formulario->save();
                            endif;
                        endforeach;
                        
                        $seguimiento = Doctrine::getTable('ProcSeguimiento')->findOneById($st[0]['nextval']);
                        $seguimiento->setDatPersonasId($id);
                        $seguimiento->save();
                        $this->getUser()->setFlash('success', "SE REALIZO LA INSCRIPCION CORRECTAMENTE");
                        $conn->commit();
                    } catch (Doctrine_Exception $e) {
                        $conn->rollback();
                        die($e);
                        $this->getUser()->setFlash('error', "HUBO UN ERROR EN LA INSCRIPCION");
                        $this->redirect('main/index');
                    }
                endif;
            endif;
        endif;
    }

}
