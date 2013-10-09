<?php

/**
 * registro actions.
 *
 * @package    universidad
 * @subpackage registro
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class registroActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->formPersonas = new DatPersonasForm(); 
      if ($request->isMethod('post'))
      {          
          $this->formPersonas->bind($request->getParameter('dat_personas'));
          if ($this->formPersonas->isValid())
          {               
              $this->formPersonas->save();
              $this->redirect('main/index');
          }
     }
              
  }
}
