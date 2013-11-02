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
      'nro_certificado' => new sfWidgetFormInputHidden(),
      'oficialia'       => new sfWidgetFormTextarea(),
      'libro'           => new sfWidgetFormTextarea(),
      'partida'         => new sfWidgetFormTextarea(),
      'folio'           => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'nro_certificado' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('nro_certificado')), 'empty_value' => $this->getObject()->get('nro_certificado'), 'required' => false)),
      'oficialia'       => new sfValidatorString(),
      'libro'           => new sfValidatorString(),
      'partida'         => new sfValidatorString(),
      'folio'           => new sfValidatorString(array('required' => false)),
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
