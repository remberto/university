<?php

/**
 * UniUniversidad form base class.
 *
 * @method UniUniversidad getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUniUniversidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'      => new sfWidgetFormInputHidden(),
      'descripcion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'codigo'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('codigo')), 'empty_value' => $this->getObject()->get('codigo'), 'required' => false)),
      'descripcion' => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('uni_universidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniUniversidad';
  }

}
