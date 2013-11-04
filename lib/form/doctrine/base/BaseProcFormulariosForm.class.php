<?php

/**
 * ProcFormularios form base class.
 *
 * @method ProcFormularios getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProcFormulariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'gestion_id'        => new sfWidgetFormInputHidden(),
      'cla_tramite_id'    => new sfWidgetFormInputText(),
      'cla_proceso_id'    => new sfWidgetFormInputText(),
      'cla_formulario_id' => new sfWidgetFormInputText(),
      'cla_tabla_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTabla'), 'add_empty' => true)),
      'getid'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'gestion_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gestion_id')), 'empty_value' => $this->getObject()->get('gestion_id'), 'required' => false)),
      'cla_tramite_id'    => new sfValidatorInteger(array('required' => false)),
      'cla_proceso_id'    => new sfValidatorInteger(array('required' => false)),
      'cla_formulario_id' => new sfValidatorInteger(array('required' => false)),
      'cla_tabla_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTabla'), 'required' => false)),
      'getid'             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proc_formularios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProcFormularios';
  }

}
