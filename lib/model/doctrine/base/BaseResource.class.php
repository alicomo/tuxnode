<?php

/**
 * BaseResource
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $service
 * @property integer $feature
 * @property string $resource
 * @property Service $Service
 * @property Feature $Feature
 * 
 * @method integer  getService()  Returns the current record's "service" value
 * @method integer  getFeature()  Returns the current record's "feature" value
 * @method string   getResource() Returns the current record's "resource" value
 * @method Service  getService()  Returns the current record's "Service" value
 * @method Feature  getFeature()  Returns the current record's "Feature" value
 * @method Resource setService()  Sets the current record's "service" value
 * @method Resource setFeature()  Sets the current record's "feature" value
 * @method Resource setResource() Sets the current record's "resource" value
 * @method Resource setService()  Sets the current record's "Service" value
 * @method Resource setFeature()  Sets the current record's "Feature" value
 * 
 * @package    tuxnode
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseResource extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('resource');
        $this->hasColumn('service', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('feature', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('resource', 'string', 255, array(
             'type' => 'string',
             'notblank' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Service', array(
             'local' => 'service',
             'foreign' => 'id'));

        $this->hasOne('Feature', array(
             'local' => 'feature',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}