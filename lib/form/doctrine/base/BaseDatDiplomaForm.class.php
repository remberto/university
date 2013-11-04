<?php

/**
 * DatDiploma form base class.
 *
 * @method DatDiploma getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDatDiplomaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'dat_institucion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatInstitucion'), 'add_empty' => false)),
      'nro'                    => new sfWidgetFormInputText(),
      'serie'                  => new sfWidgetFormTextarea(),
      'fecha_emision'          => new sfWidgetFormDateTime(),
      'cla_grado_academico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'), 'add_empty' => false)),
      'dat_persona_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'dat_institucion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatInstitucion'))),
      'nro'                    => new sfValidatorInteger(),
      'serie'                  => new sfValidatorString(array('required' => false)),
      'fecha_emision'          => new sfValidatorDateTime(),
      'cla_grado_academico_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'))),
      'dat_persona_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'))),
    ));

    $this->widgetSchema->setNameFormat('dat_diploma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatDiploma';
  }

}
