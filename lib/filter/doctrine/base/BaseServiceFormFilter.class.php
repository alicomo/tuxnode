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
      'feature_name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feature_value' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monthly'       => new sfWidgetFormFilterInput(),
      'quarterly'     => new sfWidgetFormFilterInput(),
      'semi_annually' => new sfWidgetFormFilterInput(),
      'whm_url'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'category'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'feature_name'  => new sfValidatorPass(array('required' => false)),
      'feature_value' => new sfValidatorPass(array('required' => false)),
      'monthly'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'quarterly'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'semi_annually' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'whm_url'       => new sfValidatorPass(array('required' => false)),
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
      'feature_name'  => 'Text',
      'feature_value' => 'Text',
      'monthly'       => 'Number',
      'quarterly'     => 'Number',
      'semi_annually' => 'Number',
      'whm_url'       => 'Text',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
      'slug'          => 'Text',
    );
  }
}
