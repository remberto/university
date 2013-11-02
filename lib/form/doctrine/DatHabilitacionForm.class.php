<?php

/**
 * DatHabilitacion form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatHabilitacionForm extends BaseDatHabilitacionForm
{
  public function configure()
  {
      $this->setWidget('id',new sfWidgetFormInputHidden());
      //$this->setWidget('uni_gestion_id',new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'), 'add_empty' => true)));
      //$this->setWidget('uni_sede_id',new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UniSede'), 'add_empty' => true)));
      //$this->setWidget('uni_sede_id', new sfWidgetFormInputText(array('label' => 'Sede o Sub Sede Academica'), array('size' => 25, 'minlength' => 2, 'class' => 'm-wrap large','placeholder'=>'Sede o Subsede Academica', 'required'=>'true')));
      
      $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'uni_sede_id'      => new sfValidatorString(array('required' => true)),
    ));
  }
}
