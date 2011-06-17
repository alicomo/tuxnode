<?php

/**
 * Service filter form base class.
 *
 * @package    tuxnode
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseServiceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'category'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'monthly'       => new sfWidgetFormFilterInput(),
      'quarterly'     => new sfWidgetFormFilterInput(),
      'semi_annually' => new sfWidgetFormFilterInput(),
      'annually'      => new sfWidgetFormFilterInput(),
      'whm_url'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_home'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_service'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'category'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'monthly'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'quarterly'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'semi_annually' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'annually'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'whm_url'       => new sfValidatorPass(array('required' => false)),
      'is_home'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_service'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('service_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Service';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'category'      => 'ForeignKey',
      'monthly'       => 'Number',
      'quarterly'     => 'Number',
      'semi_annually' => 'Number',
      'annually'      => 'Number',
      'whm_url'       => 'Text',
      'is_home'       => 'Boolean',
      'is_service'    => 'Boolean',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
      'slug'          => 'Text',
    );
  }
}
