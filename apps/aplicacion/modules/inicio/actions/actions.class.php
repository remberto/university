<?php

/**
 * inicio actions.
 *
 * @package    universidad
 * @subpackage inicio
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
  public function preExecute()
  {
    $this->getUser()->setAttribute('MENU',0);
    $this->getUser()->setAttribute('SUBMENU',0);
  }  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
  }
}
