<?php

/**
 * principal components.
 *
 * @package    sieweb
 * @subpackage Componente para generar el menu
 * @author     Remberto Quispe Gutierrez <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class registroComponents extends sfComponents
{
  /**
  * Componente para generaci�n del men�
  *
  * @param none
  */  
  public function executeRegistroPersona()
  {
    $this->formPersona = new DatPersonasForm();
    $this->formPersona->setWidget('adm_usuario_id', new sfWidgetFormInputHidden(array('default'=>$this->getUser()->getAttribute('USUARIO_ID'))));
  }
  
  public function executeRegistroInscripcion()
  {
    $this->formInscripcion = new RegInscripcionForm();
    $this->formInscripcion->setWidget('uni_sede_id', new sfWidgetFormChoice(array('choices' => array('Asunto A', 'Asunto B', 'Asunto C'))));
    $this->formInscripcion->setWidget('adm_usuario_id', new sfWidgetFormInputHidden(array('default'=>$this->getUser()->getAttribute('USUARIO_ID'))));
  }
  
  public function executeRegistroDiploma()
  {
      $this->formDiploma = new DatDiplomaForm();
  }
  
  
}
