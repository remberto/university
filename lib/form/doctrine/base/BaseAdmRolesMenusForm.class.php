<?php

/**
 * AdmRolesMenus form base class.
 *
 * @method AdmRolesMenus getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdmRolesMenusForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'adm_rol_id'  => new sfWidgetFormInputHidden(),
      'adm_menu_id' => new sfWidgetFormInputHidden(),
      'habilitado'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'adm_rol_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('adm_rol_id')), 'empty_value' => $this->getObject()->get('adm_rol_id'), 'required' => false)),
      'adm_menu_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('adm_menu_id')), 'empty_value' => $this->getObject()->get('adm_menu_id'), 'required' => false)),
      'habilitado'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('adm_roles_menus[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmRolesMenus';
  }

}
