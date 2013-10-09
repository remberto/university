<?php

/**
 * UniSedeCarreraGestion form base class.
 *
 * @method UniSedeCarreraGestion getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUniSedeCarreraGestionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'uni_sede_id'    => new sfWidgetFormInputHidden(),
      'uni_carrera_id' => new sfWidgetFormInputHidden(),
      'gestion_id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'uni_sede_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_sede_id')), 'empty_value' => $this->getObject()->get('uni_sede_id'), 'required' => false)),
      'uni_carrera_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_carrera_id')), 'empty_value' => $this->getObject()->get('uni_carrera_id'), 'required' => false)),
      'gestion_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gestion_id')), 'empty_value' => $this->getObject()->get('gestion_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('uni_sede_carrera_gestion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniSedeCarreraGestion';
  }

}
