<?php

/**
 * AdmUsuarios filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdmUsuariosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'username'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'correo_electronico' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'habilitado'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => true)),
      'telefono_fijo'      => new sfWidgetFormFilterInput(),
      'telefono_movil'     => new sfWidgetFormFilterInput(),
      'ci_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'add_empty' => true)),
      'adm_roles_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdmRoles'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'username'           => new sfValidatorPass(array('required' => false)),
      'password'           => new sfValidatorPass(array('required' => false)),
      'correo_electronico' => new sfValidatorPass(array('required' => false)),
      'habilitado'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaHabilitado'), 'column' => 'id')),
      'telefono_fijo'      => new sfValidatorPass(array('required' => false)),
      'telefono_movil'     => new sfValidatorPass(array('required' => false)),
      'ci_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatPersonas'), 'column' => 'ci')),
      'adm_roles_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdmRoles'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('adm_usuarios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmUsuarios';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'username'           => 'Text',
      'password'           => 'Text',
      'correo_electronico' => 'Text',
      'habilitado'         => 'ForeignKey',
      'telefono_fijo'      => 'Text',
      'telefono_movil'     => 'Text',
      'ci_id'              => 'ForeignKey',
      'adm_roles_id'       => 'ForeignKey',
    );
  }
}
