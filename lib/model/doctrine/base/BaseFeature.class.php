<?php

/**
 * BaseFeature
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property boolean $is_active
 * @property Doctrine_Collection $FeatureResource
 * 
 * @method string              getName()            Returns the current record's "name" value
 * @method boolean             getIsActive()        Returns the current record's "is_active" value
 * @method Doctrine_Collection getFeatureResource() Returns the current record's "FeatureResource" collection
 * @method Feature             setName()            Sets the current record's "name" value
 * @method Feature             setIsActive()        Sets the current record's "is_active" value
 * @method Feature             setFeatureResource() Sets the current record's "FeatureResource" collection
 * 
 * @package    tuxnode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFeature extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('feature');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notblank' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Resource as FeatureResource', array(
             'local' => 'id',
             'foreign' => 'feature'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}