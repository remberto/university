<?php

/**
 * ClaFormulario form base class.
 *
 * @method ClaFormulario getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseClaFormularioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'descripcion'  => new sfWidgetFormTextarea(),
      'modulo'       => new sfWidgetFormTextarea(),
      'componente'   => new sfWidgetFormTextarea(),
      'cla_tabla_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTabla'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'descripcion'  => new sfValidatorString(),
      'modulo'       => new sfValidatorString(),
      'componente'   => new sfValidatorString(array('required' => false)),
      'cla_tabla_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTabla'))),
    ));

    $this->widgetSchema->setNameFormat('cla_formulario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaFormulario';
  }

}
