<?php

/**
 * ClaProceso form base class.
 *
 * @method ClaProceso getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaProcesoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nro_proceso'         => new sfWidgetFormInputText(),
      'cla_tramite_id'      => new sfWidgetFormInputHidden(),
      'descripcion'         => new sfWidgetFormTextarea(),
      'tiempo'              => new sfWidgetFormInputText(),
      'cla_tipo_proceso_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoProceso'), 'add_empty' => true)),
      'url'                 => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nro_proceso'         => new sfValidatorInteger(array('required' => false)),
      'cla_tramite_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_tramite_id')), 'empty_value' => $this->getObject()->get('cla_tramite_id'), 'required' => false)),
      'descripcion'         => new sfValidatorString(array('required' => false)),
      'tiempo'              => new sfValidatorInteger(array('required' => false)),
      'cla_tipo_proceso_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoProceso'), 'required' => false)),
      'url'                 => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_proceso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaProceso';
  }

}
