<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaDocumentos', 'doctrine');

/**
 * BaseClaDocumentos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $cla_tramite_id
 * @property integer $cla_proceso_id
 * @property string $path
 * 
 * @method integer       getId()             Returns the current record's "id" value
 * @method integer       getClaTramiteId()   Returns the current record's "cla_tramite_id" value
 * @method integer       getClaProcesoId()   Returns the current record's "cla_proceso_id" value
 * @method string        getPath()           Returns the current record's "path" value
 * @method ClaDocumentos setId()             Sets the current record's "id" value
 * @method ClaDocumentos setClaTramiteId()   Sets the current record's "cla_tramite_id" value
 * @method ClaDocumentos setClaProcesoId()   Sets the current record's "cla_proceso_id" value
 * @method ClaDocumentos setPath()           Sets the current record's "path" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClaDocumentos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_documentos');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'cla_documentos_id',
             'length' => 4,
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
        $this->hasColumn('path', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}