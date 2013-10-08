<?php

/**
 * principal components.
 *
 * @package    sieweb
 * @subpackage Componente para generar el menu
 * @author     Ing. Ivan Callapa Quiroz
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
  
}
