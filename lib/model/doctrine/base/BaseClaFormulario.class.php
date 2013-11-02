<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaFormulario', 'doctrine');

/**
 * BaseClaFormulario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property string $modulo
 * @property string $componente
 * @property integer $cla_tabla_id
 * @property ClaTabla $ClaTabla
 * 
 * @method integer       getId()           Returns the current record's "id" value
 * @method string        getDescripcion()  Returns the current record's "descripcion" value
 * @method string        getModulo()       Returns the current record's "modulo" value
 * @method string        getComponente()   Returns the current record's "componente" value
 * @method integer       getClaTablaId()   Returns the current record's "cla_tabla_id" value
 * @method ClaTabla      getClaTabla()     Returns the current record's "ClaTabla" value
 * @method ClaFormulario setId()           Sets the current record's "id" value
 * @method ClaFormulario setDescripcion()  Sets the current record's "descripcion" value
 * @method ClaFormulario setModulo()       Sets the current record's "modulo" value
 * @method ClaFormulario setComponente()   Sets the current record's "componente" value
 * @method ClaFormulario setClaTablaId()   Sets the current record's "cla_tabla_id" value
 * @method ClaFormulario setClaTabla()     Sets the current record's "ClaTabla" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClaFormulario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_formulario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'cla_formulario_id',
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
        $this->hasColumn('modulo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('componente', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('cla_tabla_id', 'integer', 4, array(
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
        $this->hasOne('ClaTabla', array(
             'local' => 'cla_tabla_id',
             'foreign' => 'id'));
    }
}