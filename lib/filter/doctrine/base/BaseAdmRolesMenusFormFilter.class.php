<?php

/**
 * AdmRolesMenus filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdmRolesMenusFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'habilitado'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'habilitado'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaHabilitado'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('adm_roles_menus_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmRolesMenus';
  }

  public function getFields()
  {
    return array(
      'adm_rol_id'  => 'Number',
      'adm_menu_id' => 'Number',
      'habilitado'  => 'ForeignKey',
    );
  }
}
