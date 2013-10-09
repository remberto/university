<?php

/**
 * Login form base class.
 *
 * @package    universidad
 * @subpackage form
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */

class LoginForm extends BaseAdmUsuariosForm
{
  public function configure()
  {
      unset($this['id'],$this['correo_electronico'],$this['estado'],$this['ci_id'],$this['adm_rol_id']);
      
      //$this->setWidget('id',new sfWidgetFormInputHidden());
      $this->setWidget('username', new sfWidgetFormInputText());
      $this->setWidget('password', new sfWidgetFormInputPassword());

      //$this->validatorSchema['password']->setOption('min_length', '5');
      //$this->validatorSchema['username']->setMessage('required',utf8_encode('Ingrese el nombre de usuario'));
      ///$this->validatorSchema['password']->setMessage('min_length',utf8_encode('El password debe contener como m�nimo 5 caracteres'));
      //$this->validatorSchema['password']->setMessage('max_length',utf8_encode('El password debe contener como m�ximo 30 caracteres'));
      //$this->validatorSchema['password']->setMessage('required',utf8_encode('Ingrese su password'));
  }
}