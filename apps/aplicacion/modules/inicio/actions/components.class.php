<?php

/**
 * principal components.
 *
 * @package    sieweb
 * @subpackage Componente para generar el menu
 * @author     Remberto Quispe Gutierrez <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class inicioComponents extends sfComponents
{
  /**
  * Componente para generaci�n del men�
  *
  * @param none
  */  
  public function executeMenu()
  {
    $this->menus = Doctrine::getTable('AdmMenus')->getMenus($this->getUser()->getAttribute('ROL'),0);
  }
  
  public function executeSubmenu()
  {
    $this->submenus = Doctrine::getTable('AdmMenus')->getSubMenus($this->getUser()->getAttribute('ROL'), $this->menu);
  }
  
  public function executeMenulateral()
  {
    $this->menuslateral =  Doctrine::getTable('AdmMenus')->getMenus($this->getUser()->getAttribute('ROL'),2);
  } 
  
}
