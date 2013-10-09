<?php

/**
 * AdmUsuarios form base class.
 *
 * @method AdmUsuarios getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdmUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'username'           => new sfWidgetFormTextarea(),
      'password'           => new sfWidgetFormTextarea(),
      'correo_electronico' => new sfWidgetFormTextarea(),
      'habilitado'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => false)),
      'telefono_fijo'      => new sfWidgetFormTextarea(),
      'telefono_movil'     => new sfWidgetFormTextarea(),
      'ci_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'add_empty' => false)),
      'adm_roles_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdmRoles'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'username'           => new sfValidatorString(),
      'password'           => new sfValidatorString(),
      'correo_electronico' => new sfValidatorString(),
      'habilitado'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'required' => false)),
      'telefono_fijo'      => new sfValidatorString(array('required' => false)),
      'telefono_movil'     => new sfValidatorString(array('required' => false)),
      'ci_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'))),
      'adm_roles_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdmRoles'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('adm_usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmUsuarios';
  }

}
