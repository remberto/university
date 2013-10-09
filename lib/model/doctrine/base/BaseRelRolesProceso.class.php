<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RelRolesProceso', 'doctrine');

/**
 * BaseRelRolesProceso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $adm_rol_id
 * @property integer $tramite_id
 * @property integer $proceso_id
 * @property boolean $habilitado
 * 
 * @method integer         getAdmRolId()   Returns the current record's "adm_rol_id" value
 * @method integer         getTramiteId()  Returns the current record's "tramite_id" value
 * @method integer         getProcesoId()  Returns the current record's "proceso_id" value
 * @method boolean         getHabilitado() Returns the current record's "habilitado" value
 * @method RelRolesProceso setAdmRolId()   Sets the current record's "adm_rol_id" value
 * @method RelRolesProceso setTramiteId()  Sets the current record's "tramite_id" value
 * @method RelRolesProceso setProcesoId()  Sets the current record's "proceso_id" value
 * @method RelRolesProceso setHabilitado() Sets the current record's "habilitado" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRelRolesProceso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('rel_roles_proceso');
        $this->hasColumn('adm_rol_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('tramite_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('proceso_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('habilitado', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}