<?php

/**
 * ClaRutaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ClaRutaTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ClaRutaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ClaRuta');
    }
    
    public function getNextRuta($id)
    {
        $q = $this->createQuery('c')
        ->InnerJoin('c.Siguiente d')
        ->InnerJoin('d.RelRolesProceso e on d.id = e.proceso_id and d.cla_tramite_id = e.tramite_id')
        ->InnerJoin('e.RelRolesTramite f')
        ->innerJoin('f.AdmRoles g')
        ->innerJoin('g.AdmUsuarios h')
        ->innerJoin('d.ClaTipoProceso i')
        ->where('c.origen_id = ?', $id);
        return $q->execute();
    }
}