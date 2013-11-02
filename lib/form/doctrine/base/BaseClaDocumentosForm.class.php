<?php

/**
 * ClaDocumentos form base class.
 *
 * @method ClaDocumentos getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaDocumentosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'cla_tramite_id' => new sfWidgetFormInputHidden(),
      'cla_proceso_id' => new sfWidgetFormInputHidden(),
      'path'           => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'cla_tramite_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_tramite_id')), 'empty_value' => $this->getObject()->get('cla_tramite_id'), 'required' => false)),
      'cla_proceso_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_proceso_id')), 'empty_value' => $this->getObject()->get('cla_proceso_id'), 'required' => false)),
      'path'           => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_documentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDocumentos';
  }

}
