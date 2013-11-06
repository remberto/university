<?php

/**
 * DatHabilitacion form base class.
 *
 * @method DatHabilitacion getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDatHabilitacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'dat_persona_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'add_empty' => true)),
      'uni_sede_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UniSede'), 'add_empty' => true)),
      'uni_carrera_id'          => new sfWidgetFormInputText(),
      'uni_gestion_id'          => new sfWidgetFormInputText(),
      'cla_grado_academico_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'), 'add_empty' => true)),
      'cla_modalidad_egreso_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEgreso'), 'add_empty' => false)),
      'adm_usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdmUsuarios'), 'add_empty' => true)),
      'fecha_registro'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'dat_persona_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'required' => false)),
      'uni_sede_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UniSede'), 'required' => false)),
      'uni_carrera_id'          => new sfValidatorInteger(array('required' => false)),
      'uni_gestion_id'          => new sfValidatorInteger(array('required' => false)),
      'cla_grado_academico_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'), 'required' => false)),
      'cla_modalidad_egreso_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEgreso'))),
      'adm_usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdmUsuarios'), 'required' => false)),
      'fecha_registro'          => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_habilitacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatHabilitacion';
  }

}
