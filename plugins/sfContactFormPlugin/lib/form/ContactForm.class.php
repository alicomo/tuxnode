<?php

class ContactForm extends sfForm
{
  
  public function configure()
  {
     $this->setWidgets(array(
        'name'    => new sfWidgetFormInput(),
        'email'   => new sfWidgetFormInput(),
        'subject' => new sfWidgetFormInput(),
        'message' => new sfWidgetFormTextarea(),
        'captcha' => new sfWidgetFormInput(),
     ));

     $this->widgetSchema->setNameFormat('contact[%s]');
     
     $this->setValidators(array(
        'name'   => new sfValidatorString(array('required' => true)),
        'email'  => new sfValidatorEmail(),
        'subject' => new sfValidatorString(array('required' => false)),
        'message' => new sfValidatorString(array('min_length' => 4)),
        'captcha' => new sfValidatorSfCryptoCaptcha(array('required' => true, 'trim' => true),
                                                   array('wrong_captcha' => 'The code you copied is not valid.',
                                                         'required' => 'You did not copy any code. Please copy the code.')),

    ));
  }
}
