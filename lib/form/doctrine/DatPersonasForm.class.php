<?php

/**
 * DatPersonas form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatPersonasForm extends BaseDatPersonasForm
{
  public function configure()
  {
      $this->setWidget('ci', new sfWidgetFormInputText(array('label' => 'Cedula de Identidad'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Nro. de Cedula de Identidad')));
      $this->setWidget('paterno', new sfWidgetFormInputText(array('label' => 'Apellido Paterno'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Apellido Paterno')));
      $this->setWidget('materno', new sfWidgetFormInputText(array('label' => 'Apellido Materno'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Apellido Materno')));
      $this->setWidget('nombre1', new sfWidgetFormInputText(array('label' => 'Primer Nombre'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Primer Nombre')));
      $this->setWidget('nombre2', new sfWidgetFormInputText(array('label' => 'Segundo Nombre'), array('size' => 25, 'class' => 'm-wrap large','placeholder'=>'Segundo Nombre')));
      $this->setWidget('fecha_nacimiento', new sfWidgetFormInputText(array('label' => 'Fecha de Nacimiento'), array('size' => 16, 'class' => 'm-wrap m-ctrl-medium date-picker', 'readonly'=>'true')));
      $this->setWidget('genero', new sfWidgetFormChoice(array('expanded' => true,'choices'=>array('1'=>'Masculino','0'=>'Femenino'))));
 
      $this->setValidators(array(
      'ci'               => new sfValidatorString(array('required' => false)),
      'paterno'          => new sfValidatorString(array('required' => false)),
      'materno'          => new sfValidatorString(array('required' => false)),
      'nombre1'          => new sfValidatorString(),
      'nombre2'          => new sfValidatorString(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorString(),
      'genero'           => new sfValidatorInteger(),
    ));
       
  }
}
