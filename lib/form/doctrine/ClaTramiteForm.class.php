<?php

/**
 * ClaTramite form.
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClaTramiteForm extends BaseClaTramiteForm
{
  public function configure()
  {
      $this->setWidget('descripcion', new sfWidgetFormChoice(array('choices'=>$tramites)));
  }
}
