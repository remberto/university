<?php

/**
 * ClaGestionSemestre form base class.
 *
 * @method ClaGestionSemestre getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaGestionSemestreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'codigo'   => new sfWidgetFormTextarea(),
      'semestre' => new sfWidgetFormTextarea(),
      'anio'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'codigo'   => new sfValidatorString(),
      'semestre' => new sfValidatorString(),
      'anio'     => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_gestion_semestre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGestionSemestre';
  }

}
