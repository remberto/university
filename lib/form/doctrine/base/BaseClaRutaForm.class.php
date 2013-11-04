<?php

/**
 * ClaRuta form base class.
 *
 * @method ClaRuta getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaRutaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'origen_id'      => new sfWidgetFormInputHidden(),
      'destino_id'     => new sfWidgetFormInputHidden(),
      'cla_tramite_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'origen_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('origen_id')), 'empty_value' => $this->getObject()->get('origen_id'), 'required' => false)),
      'destino_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('destino_id')), 'empty_value' => $this->getObject()->get('destino_id'), 'required' => false)),
      'cla_tramite_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_ruta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaRuta';
  }

}
