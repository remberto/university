<?php

/**
 * DatCertificadoNacimiento form base class.
 *
 * @method DatCertificadoNacimiento getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDatCertificadoNacimientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'nro_certificado' => new sfWidgetFormInputText(),
      'oficialia'       => new sfWidgetFormTextarea(),
      'libro'           => new sfWidgetFormTextarea(),
      'partida'         => new sfWidgetFormTextarea(),
      'folio'           => new sfWidgetFormTextarea(),
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGeografico'), 'add_empty' => false)),
      'provincia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGeografico_2'), 'add_empty' => false)),
      'localidad'       => new sfWidgetFormTextarea(),
      'dat_persona_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nro_certificado' => new sfValidatorInteger(),
      'oficialia'       => new sfValidatorString(),
      'libro'           => new sfValidatorString(),
      'partida'         => new sfValidatorString(),
      'folio'           => new sfValidatorString(array('required' => false)),
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGeografico'))),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGeografico_2'))),
      'localidad'       => new sfValidatorString(array('required' => false)),
      'dat_persona_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatPersonas'))),
    ));

    $this->widgetSchema->setNameFormat('dat_certificado_nacimiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatCertificadoNacimiento';
  }

}
