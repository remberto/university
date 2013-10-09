<?php

/**
 * UniSedeCarreras filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUniSedeCarrerasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'resolucion'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inicio'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'duracion'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cla_grado_academico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'resolucion'             => new sfValidatorPass(array('required' => false)),
      'fecha_inicio'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'duracion'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cla_grado_academico_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGradoAcademico'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('uni_sede_carreras_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniSedeCarreras';
  }

  public function getFields()
  {
    return array(
      'uni_sede_id'            => 'Number',
      'uni_carrera_id'         => 'Number',
      'resolucion'             => 'Text',
      'fecha_inicio'           => 'Date',
      'duracion'               => 'Number',
      'cla_grado_academico_id' => 'ForeignKey',
    );
  }
}
