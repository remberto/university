<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdmRolesUsuarios', 'doctrine');

/**
 * BaseAdmRolesUsuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $adm_usuario_id
 * @property integer $adm_rol_id
 * @property AdmRoles $AdmRoles
 * @property AdmUsuarios $AdmUsuarios
 * 
 * @method integer          getAdmUsuarioId()   Returns the current record's "adm_usuario_id" value
 * @method integer          getAdmRolId()       Returns the current record's "adm_rol_id" value
 * @method AdmRoles         getAdmRoles()       Returns the current record's "AdmRoles" value
 * @method AdmUsuarios      getAdmUsuarios()    Returns the current record's "AdmUsuarios" value
 * @method AdmRolesUsuarios setAdmUsuarioId()   Sets the current record's "adm_usuario_id" value
 * @method AdmRolesUsuarios setAdmRolId()       Sets the current record's "adm_rol_id" value
 * @method AdmRolesUsuarios setAdmRoles()       Sets the current record's "AdmRoles" value
 * @method AdmRolesUsuarios setAdmUsuarios()    Sets the current record's "AdmUsuarios" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmRolesUsuarios extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adm_roles_usuarios');
        $this->hasColumn('adm_usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('adm_rol_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdmRoles', array(
             'local' => 'adm_rol_id',
             'foreign' => 'id'));

        $this->hasOne('AdmUsuarios', array(
             'local' => 'adm_usuario_id',
             'foreign' => 'id'));
    }
}