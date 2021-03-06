<?php

/**
 * ClaGradoAcademicoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ClaGradoAcademicoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ClaGradoAcademicoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ClaGradoAcademico');
    }
    
    public function getGrados($sede){
        $q = $this->createQuery('c')
        ->innerJoin('c.UniSedeCarreras d')
        ->where('d.uni_sede_id = ?', $sede);
        return $q->execute();
    }
}