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
    //$this->menus = Doctrine::getTable('AdmMenus')->getMenus($this->getUser()->getAttribute('ROL'),0);
  }
  
  public function executeSubmenu()
  {
    //$this->submenus = Doctrine::getTable('AdmMenus')->getSubMenus($this->getUser()->getAttribute('ROL'), $this->menu);
  }
  
  public function executeMenulateral()
  {
    $this->menus =  Doctrine::getTable('AdmMenus')->getMenus($this->getUser()->getAttribute('ROL'),1);
  } 
  
  public function executeCabecera()
  {
    if ($this->getUser()->getAttribute('MENU')==0){
        $this->nivel1='Inicio';
        $this->icono='icon-home';
        $this->titulo1='Bienvenidos';
        $this->titulo2='';
    }
    else{
       $menu = Doctrine::getTable('AdmMenus')->find($this->getUser()->getAttribute('MENU'));
       $submenu = Doctrine::getTable('AdmMenus')->find($this->getUser()->getAttribute('SUBMENU'));
       $this->nivel1=$menu->getDescripcion();
       $this->nivel2= 'Revision';
       $this->titulo1=$this->nivel1;
       $this->titulo2= 'Revision';
       $this->icono=$menu->getIcon();
    }
    //$this->menus =  Doctrine::getTable('AdmMenus')->getMenus($this->getUser()->getAttribute('ROL'),1);
      
  } 
  
}
