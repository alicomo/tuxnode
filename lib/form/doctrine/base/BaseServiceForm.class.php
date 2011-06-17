<?php

/**
 * Service form base class.
 *
 * @method Service getObject() Returns the current form's model object
 *
 * @package    tuxnode
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseServiceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'category'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'monthly'       => new sfWidgetFormInputText(),
      'quarterly'     => new sfWidgetFormInputText(),
      'semi_annually' => new sfWidgetFormInputText(),
      'annually'      => new sfWidgetFormInputText(),
      'whm_url'       => new sfWidgetFormInputText(),
      'is_home'       => new sfWidgetFormInputCheckbox(),
      'is_service'    => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'slug'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'category'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'monthly'       => new sfValidatorNumber(array('required' => false)),
      'quarterly'     => new sfValidatorNumber(array('required' => false)),
      'semi_annually' => new sfValidatorNumber(array('required' => false)),
      'annually'      => new sfValidatorNumber(array('required' => false)),
      'whm_url'       => new sfValidatorString(array('max_length' => 255)),
      'is_home'       => new sfValidatorBoolean(array('required' => false)),
      'is_service'    => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
      'slug'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Service', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('service[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Service';
  }

}
