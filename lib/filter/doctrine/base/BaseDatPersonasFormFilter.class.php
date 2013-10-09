<?php

/**
 * DatPersonas filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDatPersonasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'paterno'          => new sfWidgetFormFilterInput(),
      'materno'          => new sfWidgetFormFilterInput(),
      'nombre1'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre2'          => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'adm_usuario_id'   => new sfWidgetFormFilterInput(),
      'fecha_registro'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'foto'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'paterno'          => new sfValidatorPass(array('required' => false)),
      'materno'          => new sfValidatorPass(array('required' => false)),
      'nombre1'          => new sfValidatorPass(array('required' => false)),
      'nombre2'          => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'genero'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adm_usuario_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_registro'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'foto'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_personas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatPersonas';
  }

  public function getFields()
  {
    return array(
      'ci'               => 'Text',
      'paterno'          => 'Text',
      'materno'          => 'Text',
      'nombre1'          => 'Text',
      'nombre2'          => 'Text',
      'fecha_nacimiento' => 'Date',
      'genero'           => 'Number',
      'adm_usuario_id'   => 'Number',
      'fecha_registro'   => 'Date',
      'foto'             => 'Text',
    );
  }
}
