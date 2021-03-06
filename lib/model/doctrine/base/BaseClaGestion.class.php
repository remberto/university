<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaGestion', 'doctrine');

/**
 * BaseClaGestion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion
 * @property Doctrine_Collection $ProcSeguimiento
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getGestion()         Returns the current record's "gestion" value
 * @method Doctrine_Collection getProcSeguimiento() Returns the current record's "ProcSeguimiento" collection
 * @method ClaGestion          setId()              Sets the current record's "id" value
 * @method ClaGestion          setGestion()         Sets the current record's "gestion" value
 * @method ClaGestion          setProcSeguimiento() Sets the current record's "ProcSeguimiento" collection
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClaGestion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_gestion');
        $this->hasColumn('id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 2,
             ));
        $this->hasColumn('gestion', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ProcSeguimiento', array(
             'local' => 'id',
             'foreign' => 'gestion_id'));
    }
}