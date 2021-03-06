<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdmUsuarioAdministra', 'doctrine');

/**
 * BaseAdmUsuarioAdministra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $adm_usuario_id
 * @property integer $uni_sede_id
 * @property integer $habilitado
 * @property integer $cla_cargo_id
 * @property AdmUsuarios $AdmUsuarios
 * @property ClaHabilitado $ClaHabilitado
 * @property UniSede $UniSede
 * @property ClaCargo $ClaCargo
 * 
 * @method integer              getAdmUsuarioId()   Returns the current record's "adm_usuario_id" value
 * @method integer              getUniSedeId()      Returns the current record's "uni_sede_id" value
 * @method integer              getHabilitado()     Returns the current record's "habilitado" value
 * @method integer              getClaCargoId()     Returns the current record's "cla_cargo_id" value
 * @method AdmUsuarios          getAdmUsuarios()    Returns the current record's "AdmUsuarios" value
 * @method ClaHabilitado        getClaHabilitado()  Returns the current record's "ClaHabilitado" value
 * @method UniSede              getUniSede()        Returns the current record's "UniSede" value
 * @method ClaCargo             getClaCargo()       Returns the current record's "ClaCargo" value
 * @method AdmUsuarioAdministra setAdmUsuarioId()   Sets the current record's "adm_usuario_id" value
 * @method AdmUsuarioAdministra setUniSedeId()      Sets the current record's "uni_sede_id" value
 * @method AdmUsuarioAdministra setHabilitado()     Sets the current record's "habilitado" value
 * @method AdmUsuarioAdministra setClaCargoId()     Sets the current record's "cla_cargo_id" value
 * @method AdmUsuarioAdministra setAdmUsuarios()    Sets the current record's "AdmUsuarios" value
 * @method AdmUsuarioAdministra setClaHabilitado()  Sets the current record's "ClaHabilitado" value
 * @method AdmUsuarioAdministra setUniSede()        Sets the current record's "UniSede" value
 * @method AdmUsuarioAdministra setClaCargo()       Sets the current record's "ClaCargo" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmUsuarioAdministra extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adm_usuario_administra');
        $this->hasColumn('adm_usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('uni_sede_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('habilitado', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('cla_cargo_id', 'integer', 4, array(
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
        $this->hasOne('AdmUsuarios', array(
             'local' => 'adm_usuario_id',
             'foreign' => 'id'));

        $this->hasOne('ClaHabilitado', array(
             'local' => 'habilitado',
             'foreign' => 'id'));

        $this->hasOne('UniSede', array(
             'local' => 'uni_sede_id',
             'foreign' => 'id'));

        $this->hasOne('ClaCargo', array(
             'local' => 'cla_cargo_id',
             'foreign' => 'id'));
    }
}