<?php

/**
 * ClaProcesoFormularios form base class.
 *
 * @method ClaProcesoFormularios getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaProcesoFormulariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cla_proceso_id'    => new sfWidgetFormInputHidden(),
      'cla_tramite_id'    => new sfWidgetFormInputHidden(),
      'cla_formulario_id' => new sfWidgetFormInputHidden(),
      'orden'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cla_proceso_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_proceso_id')), 'empty_value' => $this->getObject()->get('cla_proceso_id'), 'required' => false)),
      'cla_tramite_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_tramite_id')), 'empty_value' => $this->getObject()->get('cla_tramite_id'), 'required' => false)),
      'cla_formulario_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_formulario_id')), 'empty_value' => $this->getObject()->get('cla_formulario_id'), 'required' => false)),
      'orden'             => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_proceso_formularios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaProcesoFormularios';
  }

}
