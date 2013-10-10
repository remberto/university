<?php

/**
 * DatDiploma form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatDiplomaForm extends BaseDatDiplomaForm
{
  public function configure()
  {
      $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'dat_institucion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatInstitucion'), 'add_empty' => false),array('class' => 'm-wrap large')),
      'nro'                    => new sfWidgetFormInputText(),
      'serie'                  => new sfWidgetFormInputText(),
      'fecha_emision'          => new sfWidgetFormInputText(array('label' => 'Fecha de Emisión'),array('size' => 16, 'class' => 'm-wrap m-ctrl-medium date-picker', 'readonly'=>'true')),
      'cla_grado_academico_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGradoAcademico'), 'add_empty' => false), array('class' => 'm-wrap large')),
    ));
  }
}
