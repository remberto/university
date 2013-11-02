<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatPersonas', 'doctrine');

/**
 * BaseDatPersonas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $ci
 * @property string $paterno
 * @property string $materno
 * @property string $nombre1
 * @property string $nombre2
 * @property timestamp $fecha_nacimiento
 * @property integer $genero
 * @property integer $adm_usuario_id
 * @property timestamp $fecha_add
 * @property string $foto
 * @property integer $extendido
 * @property Doctrine_Collection $AdmUsuarios
 * @property Doctrine_Collection $DatHabilitacion
 * @property Doctrine_Collection $ProcSeguimiento
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getCi()               Returns the current record's "ci" value
 * @method string              getPaterno()          Returns the current record's "paterno" value
 * @method string              getMaterno()          Returns the current record's "materno" value
 * @method string              getNombre1()          Returns the current record's "nombre1" value
 * @method string              getNombre2()          Returns the current record's "nombre2" value
 * @method timestamp           getFechaNacimiento()  Returns the current record's "fecha_nacimiento" value
 * @method integer             getGenero()           Returns the current record's "genero" value
 * @method integer             getAdmUsuarioId()     Returns the current record's "adm_usuario_id" value
 * @method timestamp           getFechaAdd()         Returns the current record's "fecha_add" value
 * @method string              getFoto()             Returns the current record's "foto" value
 * @method integer             getExtendido()        Returns the current record's "extendido" value
 * @method Doctrine_Collection getAdmUsuarios()      Returns the current record's "AdmUsuarios" collection
 * @method Doctrine_Collection getDatHabilitacion()  Returns the current record's "DatHabilitacion" collection
 * @method Doctrine_Collection getProcSeguimiento()  Returns the current record's "ProcSeguimiento" collection
 * @method DatPersonas         setId()               Sets the current record's "id" value
 * @method DatPersonas         setCi()               Sets the current record's "ci" value
 * @method DatPersonas         setPaterno()          Sets the current record's "paterno" value
 * @method DatPersonas         setMaterno()          Sets the current record's "materno" value
 * @method DatPersonas         setNombre1()          Sets the current record's "nombre1" value
 * @method DatPersonas         setNombre2()          Sets the current record's "nombre2" value
 * @method DatPersonas         setFechaNacimiento()  Sets the current record's "fecha_nacimiento" value
 * @method DatPersonas         setGenero()           Sets the current record's "genero" value
 * @method DatPersonas         setAdmUsuarioId()     Sets the current record's "adm_usuario_id" value
 * @method DatPersonas         setFechaAdd()         Sets the current record's "fecha_add" value
 * @method DatPersonas         setFoto()             Sets the current record's "foto" value
 * @method DatPersonas         setExtendido()        Sets the current record's "extendido" value
 * @method DatPersonas         setAdmUsuarios()      Sets the current record's "AdmUsuarios" collection
 * @method DatPersonas         setDatHabilitacion()  Sets the current record's "DatHabilitacion" collection
 * @method DatPersonas         setProcSeguimiento()  Sets the current record's "ProcSeguimiento" collection
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDatPersonas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_personas');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'dat_personas_id',
             'length' => 4,
             ));
        $this->hasColumn('ci', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('paterno', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('materno', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('nombre1', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('nombre2', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('fecha_nacimiento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('genero', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('adm_usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_add', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('foto', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('extendido', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AdmUsuarios', array(
             'local' => 'id',
             'foreign' => 'id'));

        $this->hasMany('DatHabilitacion', array(
             'local' => 'id',
             'foreign' => 'dat_persona_id'));

        $this->hasMany('ProcSeguimiento', array(
             'local' => 'id',
             'foreign' => 'dat_personas_id'));
    }
}