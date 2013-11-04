<?php

/**
 * ProcSeguimiento form base class.
 *
 * @method ProcSeguimiento getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProcSeguimientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'gestion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'), 'add_empty' => false)),
      'cla_tramite_id'         => new sfWidgetFormInputHidden(),
      'cla_proceso_id'         => new sfWidgetFormInputHidden(),
      'adm_usuario_entrada_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdmUsuarios'), 'add_empty' => true)),
      'adm_usuario_salida_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdmUsuarios_3'), 'add_empty' => true)),
      'fecha_ingreso_id'       => new sfWidgetFormDateTime(),
      'fecha_salida'           => new sfWidgetFormDateTime(),
      'dat_personas_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'add_empty' => true)),
      'recibido'               => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'gestion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'))),
      'cla_tramite_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_tramite_id')), 'empty_value' => $this->getObject()->get('cla_tramite_id'), 'required' => false)),
      'cla_proceso_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cla_proceso_id')), 'empty_value' => $this->getObject()->get('cla_proceso_id'), 'required' => false)),
      'adm_usuario_entrada_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdmUsuarios'), 'required' => false)),
      'adm_usuario_salida_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdmUsuarios_3'), 'required' => false)),
      'fecha_ingreso_id'       => new sfValidatorDateTime(),
      'fecha_salida'           => new sfValidatorDateTime(array('required' => false)),
      'dat_personas_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'required' => false)),
      'recibido'               => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('proc_seguimiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProcSeguimiento';
  }

}
