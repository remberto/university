<?php

/**
 * AdmMenus form base class.
 *
 * @method AdmMenus getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdmMenusForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'descripcion' => new sfWidgetFormTextarea(),
      'abreviatura' => new sfWidgetFormTextarea(),
      'link'        => new sfWidgetFormTextarea(),
      'tipo_menu'   => new sfWidgetFormInputText(),
      'orden'       => new sfWidgetFormInputText(),
      'adm_menu_id' => new sfWidgetFormInputText(),
      'icon'        => new sfWidgetFormTextarea(),
      'habilitado'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'descripcion' => new sfValidatorString(),
      'abreviatura' => new sfValidatorString(),
      'link'        => new sfValidatorString(array('required' => false)),
      'tipo_menu'   => new sfValidatorInteger(),
      'orden'       => new sfValidatorInteger(),
      'adm_menu_id' => new sfValidatorInteger(array('required' => false)),
      'icon'        => new sfValidatorString(array('required' => false)),
      'habilitado'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('adm_menus[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmMenus';
  }

}
