<?php

/**
 * AdmUsuarioAdministra form base class.
 *
 * @method AdmUsuarioAdministra getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdmUsuarioAdministraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'adm_usuario_id' => new sfWidgetFormInputHidden(),
      'uni_sede_id'    => new sfWidgetFormInputHidden(),
      'habilitado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => false)),
      'cla_cargo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'adm_usuario_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('adm_usuario_id')), 'empty_value' => $this->getObject()->get('adm_usuario_id'), 'required' => false)),
      'uni_sede_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_sede_id')), 'empty_value' => $this->getObject()->get('uni_sede_id'), 'required' => false)),
      'habilitado'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'))),
      'cla_cargo_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('adm_usuario_administra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmUsuarioAdministra';
  }

}
