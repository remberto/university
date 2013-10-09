<?php

/**
 * UniSede form base class.
 *
 * @method UniSede getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUniSedeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'descripcion'        => new sfWidgetFormTextarea(),
      'uni_universidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UniUniversidad'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'descripcion'        => new sfValidatorString(),
      'uni_universidad_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UniUniversidad'))),
    ));

    $this->widgetSchema->setNameFormat('uni_sede[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniSede';
  }

}
