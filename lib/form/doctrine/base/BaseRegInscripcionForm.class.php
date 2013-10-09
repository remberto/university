<?php

/**
 * RegInscripcion form base class.
 *
 * @method RegInscripcion getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'             => new sfWidgetFormInputHidden(),
      'uni_sede_id'    => new sfWidgetFormInputHidden(),
      'uni_carrera_id' => new sfWidgetFormInputHidden(),
      'gestion_id'     => new sfWidgetFormInputHidden(),
      'adm_usuario_id' => new sfWidgetFormInputText(),
      'fecha_registro' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'ci'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ci')), 'empty_value' => $this->getObject()->get('ci'), 'required' => false)),
      'uni_sede_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_sede_id')), 'empty_value' => $this->getObject()->get('uni_sede_id'), 'required' => false)),
      'uni_carrera_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_carrera_id')), 'empty_value' => $this->getObject()->get('uni_carrera_id'), 'required' => false)),
      'gestion_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gestion_id')), 'empty_value' => $this->getObject()->get('gestion_id'), 'required' => false)),
      'adm_usuario_id' => new sfValidatorInteger(array('required' => false)),
      'fecha_registro' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('reg_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RegInscripcion';
  }

}
