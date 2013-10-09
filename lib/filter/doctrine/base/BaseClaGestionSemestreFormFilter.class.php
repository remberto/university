<?php

/**
 * ClaGestionSemestre filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClaGestionSemestreFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'semestre' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anio'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo'   => new sfValidatorPass(array('required' => false)),
      'semestre' => new sfValidatorPass(array('required' => false)),
      'anio'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cla_gestion_semestre_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGestionSemestre';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'codigo'   => 'Text',
      'semestre' => 'Text',
      'anio'     => 'Number',
    );
  }
}
