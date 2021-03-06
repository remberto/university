<?php

/**
 * DatPersonas form base class.
 *
 * @method DatPersonas getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDatPersonasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'ci'               => new sfWidgetFormTextarea(),
      'paterno'          => new sfWidgetFormTextarea(),
      'materno'          => new sfWidgetFormTextarea(),
      'nombre1'          => new sfWidgetFormTextarea(),
      'nombre2'          => new sfWidgetFormTextarea(),
      'fecha_nacimiento' => new sfWidgetFormDateTime(),
      'genero'           => new sfWidgetFormInputText(),
      'adm_usuario_id'   => new sfWidgetFormInputText(),
      'fecha_add'        => new sfWidgetFormDateTime(),
      'foto'             => new sfWidgetFormTextarea(),
      'extendido'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ci'               => new sfValidatorString(),
      'paterno'          => new sfValidatorString(array('required' => false)),
      'materno'          => new sfValidatorString(array('required' => false)),
      'nombre1'          => new sfValidatorString(),
      'nombre2'          => new sfValidatorString(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateTime(),
      'genero'           => new sfValidatorInteger(),
      'adm_usuario_id'   => new sfValidatorInteger(),
      'fecha_add'        => new sfValidatorDateTime(),
      'foto'             => new sfValidatorString(array('required' => false)),
      'extendido'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_personas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatPersonas';
  }

}
