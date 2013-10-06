<?php

/**
 * RelRolesProceso form base class.
 *
 * @method RelRolesProceso getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRelRolesProcesoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'adm_rol_id' => new sfWidgetFormInputText(),
      'tramite_id' => new sfWidgetFormInputText(),
      'proceso_id' => new sfWidgetFormInputText(),
      'habilitado' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'adm_rol_id' => new sfValidatorInteger(array('required' => false)),
      'tramite_id' => new sfValidatorInteger(array('required' => false)),
      'proceso_id' => new sfValidatorInteger(array('required' => false)),
      'habilitado' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_roles_proceso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelRolesProceso';
  }

}
