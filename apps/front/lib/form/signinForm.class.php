<?php

class signinForm extends sfForm
{
  /**
   * @see sfForm
   */
  public function setup()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputPassword(array('type' => 'password')),
    ));

    $this->setValidators(array(
      'email' => new sfValidatorString(array('required' =>true),array('required' =>'Ingrese Email')),
      'password' => new sfValidatorString(array('required' =>true),array('required' =>'Ingrese contraseña')),
    ));

    if (sfConfig::get('app_sf_guard_plugin_allow_login_with_email', true))
    {
      $this->widgetSchema['username']->setLabel('Usuario');
    }

    $this->validatorSchema->setPostValidator(new signinPostValidator());

    $this->widgetSchema->setNameFormat('signin[%s]');
  }
}