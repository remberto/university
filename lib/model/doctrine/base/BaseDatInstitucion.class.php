<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatInstitucion', 'doctrine');

/**
 * BaseDatInstitucion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * 
 * @method integer        getId()          Returns the current record's "id" value
 * @method string         getDescripcion() Returns the current record's "descripcion" value
 * @method DatInstitucion setId()          Sets the current record's "id" value
 * @method DatInstitucion setDescripcion() Sets the current record's "descripcion" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDatInstitucion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_institucion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'dat_institucion_id',
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}