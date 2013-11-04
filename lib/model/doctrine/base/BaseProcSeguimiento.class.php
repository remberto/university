<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ProcSeguimiento', 'doctrine');

/**
 * BaseProcSeguimiento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion_id
 * @property integer $cla_tramite_id
 * @property integer $cla_proceso_id
 * @property integer $adm_usuario_entrada_id
 * @property integer $adm_usuario_salida_id
 * @property timestamp $fecha_ingreso_id
 * @property timestamp $fecha_salida
 * @property integer $dat_personas_id
 * @property boolean $recibido
 * @property DatPersonas $DatPersonas
 * @property AdmUsuarios $AdmUsuarios
 * @property AdmUsuarios $AdmUsuarios_3
 * @property ClaGestion $ClaGestion
 * 
 * @method integer         getId()                     Returns the current record's "id" value
 * @method integer         getGestionId()              Returns the current record's "gestion_id" value
 * @method integer         getClaTramiteId()           Returns the current record's "cla_tramite_id" value
 * @method integer         getClaProcesoId()           Returns the current record's "cla_proceso_id" value
 * @method integer         getAdmUsuarioEntradaId()    Returns the current record's "adm_usuario_entrada_id" value
 * @method integer         getAdmUsuarioSalidaId()     Returns the current record's "adm_usuario_salida_id" value
 * @method timestamp       getFechaIngresoId()         Returns the current record's "fecha_ingreso_id" value
 * @method timestamp       getFechaSalida()            Returns the current record's "fecha_salida" value
 * @method integer         getDatPersonasId()          Returns the current record's "dat_personas_id" value
 * @method boolean         getRecibido()               Returns the current record's "recibido" value
 * @method DatPersonas     getDatPersonas()            Returns the current record's "DatPersonas" value
 * @method AdmUsuarios     getAdmUsuarios()            Returns the current record's "AdmUsuarios" value
 * @method AdmUsuarios     getAdmUsuarios3()           Returns the current record's "AdmUsuarios_3" value
 * @method ClaGestion      getClaGestion()             Returns the current record's "ClaGestion" value
 * @method ProcSeguimiento setId()                     Sets the current record's "id" value
 * @method ProcSeguimiento setGestionId()              Sets the current record's "gestion_id" value
 * @method ProcSeguimiento setClaTramiteId()           Sets the current record's "cla_tramite_id" value
 * @method ProcSeguimiento setClaProcesoId()           Sets the current record's "cla_proceso_id" value
 * @method ProcSeguimiento setAdmUsuarioEntradaId()    Sets the current record's "adm_usuario_entrada_id" value
 * @method ProcSeguimiento setAdmUsuarioSalidaId()     Sets the current record's "adm_usuario_salida_id" value
 * @method ProcSeguimiento setFechaIngresoId()         Sets the current record's "fecha_ingreso_id" value
 * @method ProcSeguimiento setFechaSalida()            Sets the current record's "fecha_salida" value
 * @method ProcSeguimiento setDatPersonasId()          Sets the current record's "dat_personas_id" value
 * @method ProcSeguimiento setRecibido()               Sets the current record's "recibido" value
 * @method ProcSeguimiento setDatPersonas()            Sets the current record's "DatPersonas" value
 * @method ProcSeguimiento setAdmUsuarios()            Sets the current record's "AdmUsuarios" value
 * @method ProcSeguimiento setAdmUsuarios3()           Sets the current record's "AdmUsuarios_3" value
 * @method ProcSeguimiento setClaGestion()             Sets the current record's "ClaGestion" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProcSeguimiento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('proc_seguimiento');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'proc_seguimiento_id',
             'length' => 4,
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('cla_tramite_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('cla_proceso_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('adm_usuario_entrada_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('adm_usuario_salida_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_ingreso_id', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('fecha_salida', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 25,
             ));
        $this->hasColumn('dat_personas_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('recibido', 'boolean', 1, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => 'false',
             'primary' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatPersonas', array(
             'local' => 'dat_personas_id',
             'foreign' => 'id'));

        $this->hasOne('AdmUsuarios', array(
             'local' => 'adm_usuario_entrada_id',
             'foreign' => 'id'));

        $this->hasOne('AdmUsuarios as AdmUsuarios_3', array(
             'local' => 'adm_usuario_salida_id',
             'foreign' => 'id'));

        $this->hasOne('ClaGestion', array(
             'local' => 'gestion_id',
             'foreign' => 'id'));
    }
}