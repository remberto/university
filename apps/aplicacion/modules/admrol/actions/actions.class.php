<?php

/**
 * admrol actions.
 *
 * @package    universidad
 * @subpackage admrol
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class admrolActions extends sfActions
{
  public function preExecute()
  {
    $this->getUser()->setAttribute('MENU',4);  
    $this->getUser()->setAttribute('SUBMENU',8);
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
