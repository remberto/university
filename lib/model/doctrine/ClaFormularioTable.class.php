<?php

/**
 * ClaFormularioTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ClaFormularioTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ClaFormularioTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ClaFormulario');
    }
    
    public function getFormularios($tramite_id, $proceso_id)
    {
        $q = $this->createQuery('c')
        ->InnerJoin('c.ClaProcesoFormularios d')
        ->where('d.cla_proceso_id = ?',$proceso_id)
        ->andWhere('d.cla_tramite_id = ?', $tramite_id)
        ->orderBy('d.orden ASC');
        return $q->execute();
    }
    
}