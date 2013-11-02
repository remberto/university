<?php

/**
 * documentos actions.
 *
 * @package    universidad
 * @subpackage documentos
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
require_once dirname(__FILE__).'/../../../lib/PHPWord.php';

class documentosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      // Recuperar el Tramite y el Proceso
        $this->setLayout('descarga');
        $template = Doctrine::getTable('ClaDocumentos')->findOneByClaTramiteIdAndClaProcesoId($request->getParameter('tramite'),
                                                                                         $request->getParameter('proceso'));
        
        $seguimiento = Doctrine::getTable('ProcSeguimiento')->getTramite($request->getParameter('seguimiento'));
        $PHPWord = new PHPWord();
        $filename = 'carta_'.$request->getParameter('tramite').'_'.$request->getParameter('proceso').'.docx';
        $document = $PHPWord->loadTemplate(sfConfig::get('sf_root_dir').'/archivos/templates/'.$template->getPath());
        date_default_timezone_set('America/La_Paz');
        setlocale(LC_TIME, 'spanish');
        $document->setValue('fecha_carta',strftime("%d de %B de %Y"));
        foreach($seguimiento->ProcFormularios as $formulario):
            $tabla = Doctrine::getTable($formulario->ClaTabla->getDescripcion())->findOneById($formulario->getGetId());
            if($formulario->ClaTabla->getDescripcion() == 'DatPersonas'):
                $document->setValue('nombre_estudiante',$tabla->getNombreCompleto());
            endif;
        endforeach; 
        $document->save(sfConfig::get('sf_root_dir').'/archivos/generados/'.$filename);


//        $guardar = new ClaDocumentos();
//        $guardar->setClaTramiteId(1);
//        $guardar->setClaProcesoId(1);
//        $guardar->setPath($filename);
//        $guardar->save();
        $this->filename = $filename;
        $this->enlace = sfConfig::get('sf_root_dir').'/archivos/generados//'.$filename;
  }
}
