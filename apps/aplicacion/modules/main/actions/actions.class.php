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
          $this->redirect('main/proceso?id='.$this->tramites[0]->getId());
      endif;
  }
  
  public function executeProceso(sfWebRequest $request) {
      $this->proceso = Doctrine::getTable('ClaProceso')->getProcesoInit($this->getUser()->getAttribute('ROL'),$request['id']);
      if(!empty($this->proceso)):
        $this->formulario = Doctrine::getTable('ClaFormulario')->findOneById($this->proceso->getId());
        $this->redirect($this->formulario->getUrl());
      endif;
  }
}
