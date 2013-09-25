<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdmUsuarios', 'doctrine');

/**
 * BaseAdmUsuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $correo_electronico
 * 
 * @method integer     getId()                 Returns the current record's "id" value
 * @method string      getUsername()           Returns the current record's "username" value
 * @method string      getPassword()           Returns the current record's "password" value
 * @method string      getCorreoElectronico()  Returns the current record's "correo_electronico" value
 * @method AdmUsuarios setId()                 Sets the current record's "id" value
 * @method AdmUsuarios setUsername()           Sets the current record's "username" value
 * @method AdmUsuarios setPassword()           Sets the current record's "password" value
 * @method AdmUsuarios setCorreoElectronico()  Sets the current record's "correo_electronico" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmUsuarios extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adm_usuarios');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'adm_usuarios_id',
             'length' => 4,
             ));
        $this->hasColumn('username', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('password', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('correo_electronico', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}