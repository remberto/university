<?php

/**
 * registro actions.
 *
 * @package    universidad
 * @subpackage registro
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registroActions extends sfActions
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
      $this->formPersonas = new DatPersonasForm(); 
      if ($request->isMethod('post'))
      {          
          $this->formPersonas->bind($request->getParameter('dat_personas'));
          if ($this->formPersonas->isValid())
          {               
              $this->formPersonas->save();
              $this->redirect('main/index');
          }
     }
              
  }
  
  public function executeCarreras(sfWebRequest $request)
  {
      $this->carreras = Doctrine::getTable('UniCarreras')->getCarreras($request->getParameter('sede_id'));
  }
  
  public function executeGrados(sfWebRequest $request)
  {
      $this->grados = Doctrine::getTable('ClaGradoAcademico')->getGrados($request->getParameter('sede_id'));
  }
  
  public function executeResolucion(sfWebRequest $request)
  {
      $this->resolucion = Doctrine::getTable('UniSedeCarreras')->getCarrera($request->getParameter('sede_id'),
                                                                        $request->getParameter('carrera_id'),
                                                                        $request->getParameter('grado_id')
                                                                        );
  }
  
  public function executeGestiones(sfWebRequest $request)
  {
      $this->gestiones = Doctrine::getTable('ClaGestionSemestre')->getGestiones($request->getParameter('sede_id'),
                                                                                $request->getParameter('carrera_id')
                                                                                );
  }
}
