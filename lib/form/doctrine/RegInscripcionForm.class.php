<?php

/**
 * RegInscripcion form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RegInscripcionForm extends BaseRegInscripcionForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'uni_sede_id'    => new sfWidgetFormInputHidden(),
      'uni_carrera_id' => new sfWidgetFormInputHidden(),
      'gestion_id'     => new sfWidgetFormInputHidden(),
      'adm_usuario_id' => new sfWidgetFormInputText(),
      'fecha_registro' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'uni_sede_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_sede_id')), 'empty_value' => $this->getObject()->get('uni_sede_id'), 'required' => false)),
      'uni_carrera_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('uni_carrera_id')), 'empty_value' => $this->getObject()->get('uni_carrera_id'), 'required' => false)),
      'gestion_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('gestion_id')), 'empty_value' => $this->getObject()->get('gestion_id'), 'required' => false)),
      'adm_usuario_id' => new sfValidatorInteger(array('required' => false)),
      'fecha_registro' => new sfValidatorDateTime(),
    ));
    $this->widgetSchema->setNameFormat('reg_inscripcion[%s]');
  }
}
