<?php

/**
 * BasePhone
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $number
 * @property integer $user_id
 * @property User $User
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5441 2009-01-30 22:58:43Z jwage $
 */
abstract class BasePhone extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('phone');
        $this->hasColumn('number', 'string', 14, array('type' => 'string', 'length' => '14'));
        $this->hasColumn('user_id', 'integer', null, array('type' => 'integer'));
    }

    public function setUp()
    {
        $this->hasOne('User', array('local' => 'user_id',
                                    'foreign' => 'id'));
    }
}