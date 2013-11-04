<?php

/**
 * DatCertificadoNacimiento form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatCertificadoNacimientoForm extends BaseDatCertificadoNacimientoForm
{
  public function configure()
  {
      $this->setWidget('id',new sfWidgetFormInputHidden());
      $this->setWidget('nro_certificado', new sfWidgetFormInputText(array('label' => 'Nro de Certificado de Nacimiento'), array('size' => 10, 'minlength'=> 4, 'required'=> TRUE, 'class' => 'm-wrap large','placeholder'=>'Nro. Certificado Nacimiento'), array('help' => 'Nro de Certificado de Nacimiento')));
      $this->setWidget('oficialia', new sfWidgetFormInputText(array('label' => 'Oficialia'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Oficialia')));
      $this->setWidget('libro', new sfWidgetFormInputText(array('label' => 'Libro'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Libro')));
      $this->setWidget('partida', new sfWidgetFormInputText(array('label' => 'Partida'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Partida')));
      $this->setWidget('folio', new sfWidgetFormInputText(array('label' => 'Folio'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Folio')));
      $this->setWidget('localidad', new sfWidgetFormInputText(array('label' => 'Localidad'), array('size' => 16, 'class' => 'm-wrap large','placeholder'=>'Localidad')));
      $this->setWidget('dat_persona_id', new sfWidgetFormInputHidden());
 
//      $this->setValidators(array(
//      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
//      'ci'               => new sfValidatorString(array('required' => false)),
//      'paterno'          => new sfValidatorString(array('required' => false)),
//      'materno'          => new sfValidatorString(array('required' => false)),
//      'nombre1'          => new sfValidatorString(),
//      'nombre2'          => new sfValidatorString(array('required' => false)),
//      'fecha_nacimiento' => new sfValidatorString(),
//      'genero'           => new sfValidatorInteger(),
//      'adm_usuario_id'           => new sfValidatorInteger(),
//      'fecha_add'           => new sfValidatorDateTime(),
//    ));
  }
}
