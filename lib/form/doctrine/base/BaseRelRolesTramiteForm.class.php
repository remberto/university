<?php

/**
 * RelRolesTramite form base class.
 *
 * @method RelRolesTramite getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRelRolesTramiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'adm_rol_id' => new sfWidgetFormInputHidden(),
      'tramite_id' => new sfWidgetFormInputHidden(),
      'habilitado' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'adm_rol_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('adm_rol_id')), 'empty_value' => $this->getObject()->get('adm_rol_id'), 'required' => false)),
      'tramite_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tramite_id')), 'empty_value' => $this->getObject()->get('tramite_id'), 'required' => false)),
      'habilitado' => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('rel_roles_tramite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelRolesTramite';
  }

}
