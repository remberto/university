<?php

/**
 * UniSedeCarreras form base class.
 *
 * @method UniSedeCarreras getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUniSedeCarrerasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uni_sede_id'            => new sfWidgetFormInputHidden(),
      'uni_carrera_id'         => new sfWidgetFormInputHidden(),
      'resolucion'             => new sfWidgetFormTextarea(),
      'fecha_inicio'           => new sfWidgetFormDateTime(),
      'duracion'               => new sfWidgetFormInputText(),
      'cla_grado_academico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'uni_sede_id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_sede_id')), 'empty_value' => $this->getObject()->get('uni_sede_id'), 'required' => false)),
      'uni_carrera_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_carrera_id')), 'empty_value' => $this->getObject()->get('uni_carrera_id'), 'required' => false)),
      'resolucion'             => new sfValidatorString(),
      'fecha_inicio'           => new sfValidatorDateTime(array('required' => false)),
      'duracion'               => new sfValidatorInteger(),
      'cla_grado_academico_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'))),
    ));

    $this->widgetSchema->setNameFormat('uni_sede_carreras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniSedeCarreras';
  }

}
