<?php

/**
 * AdmUsuarioAdministra filter form base class.
 *
 * @package    universidad
 * @subpackage filter
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdmUsuarioAdministraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'habilitado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaHabilitado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'habilitado'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaHabilitado'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('adm_usuario_administra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmUsuarioAdministra';
  }

  public function getFields()
  {
    return array(
      'adm_usuario_id' => 'Number',
      'uni_sede_id'    => 'Number',
      'habilitado'     => 'ForeignKey',
    );
  }
}
