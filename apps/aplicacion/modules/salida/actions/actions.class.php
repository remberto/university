<?php

/**
 * salida actions.
 *
 * @package    universidad
 * @subpackage salida
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class salidaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->seguimiento = Doctrine::getTable("ProcSeguimiento")->getEnviado($this->getUser()->getAttribute('USUARIO_ID'));
  }
}
