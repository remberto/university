<?php

/**
 * AdmMenus filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdmMenusFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abreviatura' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link'        => new sfWidgetFormFilterInput(),
      'tipo_menu'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'orden'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'adm_menu_id' => new sfWidgetFormFilterInput(),
      'icon'        => new sfWidgetFormFilterInput(),
      'habilitado'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => true)),
      'titulo'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'abreviatura' => new sfValidatorPass(array('required' => false)),
      'link'        => new sfValidatorPass(array('required' => false)),
      'tipo_menu'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'orden'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adm_menu_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'icon'        => new sfValidatorPass(array('required' => false)),
      'habilitado'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaHabilitado'), 'column' => 'id')),
      'titulo'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('adm_menus_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmMenus';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'descripcion' => 'Text',
      'abreviatura' => 'Text',
      'link'        => 'Text',
      'tipo_menu'   => 'Number',
      'orden'       => 'Number',
      'adm_menu_id' => 'Number',
      'icon'        => 'Text',
      'habilitado'  => 'ForeignKey',
      'titulo'      => 'Text',
    );
  }
}
