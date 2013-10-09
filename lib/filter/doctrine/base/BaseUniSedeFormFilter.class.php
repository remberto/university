<?php

/**
 * UniSede filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUniSedeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'uni_universidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UniUniversidad'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'descripcion'        => new sfValidatorPass(array('required' => false)),
      'uni_universidad_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UniUniversidad'), 'column' => 'codigo')),
    ));

    $this->widgetSchema->setNameFormat('uni_sede_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniSede';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'descripcion'        => 'Text',
      'uni_universidad_id' => 'ForeignKey',
    );
  }
}
