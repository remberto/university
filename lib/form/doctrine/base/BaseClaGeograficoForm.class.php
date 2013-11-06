<?php

/**
 * ClaGeografico form base class.
 *
 * @method ClaGeografico getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaGeograficoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'codigo_ine'        => new sfWidgetFormTextarea(),
      'tipo_id'           => new sfWidgetFormInputText(),
      'descripcion'       => new sfWidgetFormTextarea(),
      'cla_geografico_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo_ine'        => new sfValidatorString(),
      'tipo_id'           => new sfValidatorInteger(),
      'descripcion'       => new sfValidatorString(),
      'cla_geografico_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_geografico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGeografico';
  }

}
