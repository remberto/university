<?php

/**
 * AdmRolesUsuarios form base class.
 *
 * @method AdmRolesUsuarios getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdmRolesUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'adm_usuario_id' => new sfWidgetFormInputHidden(),
      'adm_rol_id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'adm_usuario_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('adm_usuario_id')), 'empty_value' => $this->getObject()->get('adm_usuario_id'), 'required' => false)),
      'adm_rol_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('adm_rol_id')), 'empty_value' => $this->getObject()->get('adm_rol_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('adm_roles_usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmRolesUsuarios';
  }

}
