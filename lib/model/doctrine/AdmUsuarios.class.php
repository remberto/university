<?php

/**
 * AdmUsuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class AdmUsuarios extends BaseAdmUsuarios
{
    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatPersonas as Administra', array(
             'local' => 'id',
             'foreign' => 'id'));
        
    }
}