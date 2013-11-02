<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdmRoles', 'doctrine');

/**
 * BaseAdmRoles
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property integer $dat_institucion_id
 * @property DatInstitucion $DatInstitucion
 * @property Doctrine_Collection $AdmUsuarios
 * @property Doctrine_Collection $RelRolesTramite
 * @property Doctrine_Collection $AdmRolesMenus
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getDescripcion()        Returns the current record's "descripcion" value
 * @method integer             getDatInstitucionId()   Returns the current record's "dat_institucion_id" value
 * @method DatInstitucion      getDatInstitucion()     Returns the current record's "DatInstitucion" value
 * @method Doctrine_Collection getAdmUsuarios()        Returns the current record's "AdmUsuarios" collection
 * @method Doctrine_Collection getRelRolesTramite()    Returns the current record's "RelRolesTramite" collection
 * @method Doctrine_Collection getAdmRolesMenus()      Returns the current record's "AdmRolesMenus" collection
 * @method AdmRoles            setId()                 Sets the current record's "id" value
 * @method AdmRoles            setDescripcion()        Sets the current record's "descripcion" value
 * @method AdmRoles            setDatInstitucionId()   Sets the current record's "dat_institucion_id" value
 * @method AdmRoles            setDatInstitucion()     Sets the current record's "DatInstitucion" value
 * @method AdmRoles            setAdmUsuarios()        Sets the current record's "AdmUsuarios" collection
 * @method AdmRoles            setRelRolesTramite()    Sets the current record's "RelRolesTramite" collection
 * @method AdmRoles            setAdmRolesMenus()      Sets the current record's "AdmRolesMenus" collection
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmRoles extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adm_roles');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'adm_roles_id',
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('dat_institucion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatInstitucion', array(
             'local' => 'dat_institucion_id',
             'foreign' => 'id'));

        $this->hasMany('AdmUsuarios', array(
             'local' => 'id',
             'foreign' => 'adm_roles_id'));

        $this->hasMany('RelRolesTramite', array(
             'local' => 'id',
             'foreign' => 'adm_rol_id'));

        $this->hasMany('AdmRolesMenus', array(
             'local' => 'id',
             'foreign' => 'adm_rol_id'));
    }
}