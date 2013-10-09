<?php

/**
 * ClaProceso filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClaProcesoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nro_proceso'         => new sfWidgetFormFilterInput(),
      'descripcion'         => new sfWidgetFormFilterInput(),
      'tiempo'              => new sfWidgetFormFilterInput(),
      'cla_tipo_proceso_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoProceso'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nro_proceso'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'descripcion'         => new sfValidatorPass(array('required' => false)),
      'tiempo'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cla_tipo_proceso_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoProceso'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('cla_proceso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaProceso';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nro_proceso'         => 'Number',
      'cla_tramite_id'      => 'Number',
      'descripcion'         => 'Text',
      'tiempo'              => 'Number',
      'cla_tipo_proceso_id' => 'ForeignKey',
    );
  }
}
