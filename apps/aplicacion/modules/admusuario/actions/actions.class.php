<?php

/**
 * admusuario actions.
 *
 * @package    universidad
 * @subpackage admusuario
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class admusuarioActions extends sfActions
{
  public function preExecute()
  {
    $this->getUser()->setAttribute('MENU',4);  
    $this->getUser()->setAttribute('SUBMENU',7);
  }  
    /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->pager = new sfDoctrinePager('AdmUsuarios',5);
    $this->pager->setQuery(Doctrine::getTable('AdmUsuarios')->getListaUsuarios());
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }
}   
