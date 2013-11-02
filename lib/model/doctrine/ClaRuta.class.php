<?php

/**
 * ClaRuta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ClaRuta extends BaseClaRuta
{

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaProceso as Anterior', array(
             'local' => array('origen_id','cla_tramite_id'),
             'foreign' => array('id','cla_tramite_id')));

        $this->hasOne('ClaProceso as Siguiente', array(
             'local' => array('destino_id','cla_tramite_id'),
             'foreign' => array('id','cla_tramite_id')));
    }
}