<?php

/**
 * entrada actions.
 *
 * @package    universidad
 * @subpackage entrada
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */



class entradaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request) {
 
        $this->seguimiento = Doctrine::getTable("ProcSeguimiento")->getSeguimiento($this->getUser()->getAttribute('USUARIO_ID'));
    }
  
  public function executeEnviar(sfWebRequest $request) {
        $conn = Doctrine_Manager::connection();
        $conn->beginTransaction();
        try {
            $seguimiento = Doctrine::getTable("ProcSeguimiento")->findOneById($request->getParameter('seguimiento'));
            $seguimiento->setClaProcesoId($request->getParameter('proceso'));
            $seguimiento->setAdmUsuarioEntradaId($seguimiento->getAdmUsuarioSalidaId());
            $seguimiento->setAdmUsuarioSalidaId($request->getParameter('send_usuario'));
            $seguimiento->setFechaIngresoId(date('Y-m-d h:i:s'));
            $seguimiento->setFechaSalida(date('Y-m-d h:i:s'));
            $seguimiento->save();
            $this->getUser()->setFlash('success', "SE REALIZO LA INSCRIPCION CORRECTAMENTE");
            $conn->commit();
            $this->redirect('entrada/index');
        } catch (Doctrine_Exception $e) {
            $conn->rollback();
            die($e);
            $this->getUser()->setFlash('error', "HUBO UN ERROR EN LA INSCRIPCION");
            $this->redirect('main/index');
        }
    }
    
    public function executeTerminar(sfWebRequest $request) {
        $conn = Doctrine_Manager::connection();
        $conn->beginTransaction();
        try {
            $seguimiento = Doctrine::getTable("ProcSeguimiento")->findOneById($request->getParameter('seguimiento'));
            $seguimiento->setClaProcesoId($request->getParameter('proceso'));
            $seguimiento->setAdmUsuarioEntradaId($seguimiento->getAdmUsuarioSalidaId());
            $seguimiento->setAdmUsuarioSalidaId($request->getParameter('send_usuario'));
            $seguimiento->setFechaIngresoId(date('Y-m-d h:i:s'));
            $seguimiento->setFechaSalida(date('Y-m-d h:i:s'));
            $seguimiento->save();
            $seguimiento->delete();
            $this->getUser()->setFlash('success', "SE REALIZO LA INSCRIPCION CORRECTAMENTE");
            $conn->commit();
            $this->redirect('entrada/index');
        } catch (Doctrine_Exception $e) {
            $conn->rollback();
            die($e);
            $this->getUser()->setFlash('error', "HUBO UN ERROR EN LA INSCRIPCION");
            $this->redirect('main/index');
        }
    }
    
    public function executeEnviarform(sfWebRequest $request)
    {
        $this->setLayout('formulario');
        // Buscar usuarios
        $this->seguimiento = $request->getParameter('seguimiento');
        $this->proceso = $request->getParameter('proceso');
        // Verificar si el usuario pertenece a una institucion
        $this->institucion = Doctrine::getTable("DatInstitucion")->getInstitucion($this->getUser()->getAttribute('ROL'));
        if($this->institucion->getId() == 1):
            // Ministerio de Educacion
            $this->usuarios = Doctrine::getTable("AdmUsuarios")->getProcesoMinisterio($request->getParameter('tramite'),$request->getParameter('proceso'));
        elseif($this->institucion->getId() == 2):
            // Universidad
            $this->usuarios = Doctrine::getTable("AdmUsuarios")->getProcesoUniversidad($request->getParameter('tramite'),$request->getParameter('proceso'));
        endif;        
    }
    
    public function executeRecepcionar(sfWebRequest $request)
    {
        $this->seguimiento = Doctrine::getTable("ProcSeguimiento")->getSeguimiento(0);
        $this->usuario = $this->getUser()->getAttribute('USUARIO_ID');
    }
}
