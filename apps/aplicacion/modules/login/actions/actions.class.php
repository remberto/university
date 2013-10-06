<?php

/**
 * login actions.
 *
 * @package    universidad
 * @subpackage login
 * @author     Remberto Quispe Gutierrez
 * @version    0.1 18/09/2013
 */
class loginActions extends sfActions
{
  
    /*
     * 
     */
    public function preExecute()
    {
      //Limpiar todas las variables de Session
      $this->getUser()->getAttributeHolder()->clear();
    }
   /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {
      //utilizamos el layout de login
      $this->setLayout('layout_login');
      //creamos el formulario LOGIN
      $this->form = new LoginForm();
      if ($request->isMethod('post'))
      {     
          $this->form->bind($request->getParameter('adm_usuarios'));
          if ($this->form->isValid())
          {               
              $values = $this->form->getValues();
              //Verificar el usuario, contrase�a y si esta activo
              $adm_usuario = Doctrine::getTable('AdmUsuarios')->findOneByUsernameAndPassword($values['username'],md5($values['password']));
              if (!empty($adm_usuario)) {                
                  $this->getUser()->setAttribute('USUARIO_ID',$adm_usuario->getId());
                  $this->getUser()->setAttribute('USUARIO_USERNAME',$adm_usuario->getUsername());
//                  $this->getUser()->setAttribute('CONTROL',$adm_usuario->getId());
                  //Buscar gestion activa
//                  $gestion = Doctrine::getTable('ClaGestion')->findOneByCerrada('1');
//                  $this->getUser()->setAttribute('GESTION',$gestion->getIdGestion());

                  						
                  //Crear el control de usuario
//                  $parametros = new CtrUsuLogin();
//                  $parametros->setUsuarioId($dat_usu_usuario->getId());
//                  $parametros->setIp($_SERVER["REMOTE_ADDR"]);
//                  $parametros->setFechaIngreso(date("Y-m-d H:i:s"));
//                  $parametros->setSistemaId('3');
//                  $parametros->save();

                 $rol = Doctrine::getTable('AdmRolesUsuarios')->getRol($adm_usuario->getId());
                 if(!empty($rol))
                      $this->getUser()->setAttribute('ROL',$rol->getAdmRolId());
                 $this->redirect('main/index');
              }
              else
                  //die("Error");
                  $this->getUser()->setFlash('notice', 'Usuario y/o Password Incorrecto');
          }
      }
    }
}
