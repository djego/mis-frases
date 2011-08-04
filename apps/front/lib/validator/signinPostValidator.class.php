<?php

class signinPostValidator extends sfValidatorSchema {

  public function configure($options = array(), $messages = array()) {
    $this->addOption('email_field', 'email');
    $this->addOption('password_field', 'password');
    $this->addOption('throw_global_error', false);
    $this->setMessage('invalid', 'Ingresó erroneamente su contraseña y correo electrónico.');
    $this->addMessage('blocked', 'Su cuenta se encuentra bloqueada temporalmente, ingrese a su correo electronico para desbloquear su cuenta');
  }

  protected function doClean($values) {
    $email = isset($values[$this->getOption('email_field')]) ? $values[$this->getOption('email_field')] : '';
    $password = isset($values[$this->getOption('password_field')]) ? $values[$this->getOption('password_field')] : '';

//    $allowEmail = sfConfig::get('app_sf_guard_plugin_allow_login_with_email', true);
//    $method = $allowEmail ? 'retrieveByUsernameOrEmailAddress' : 'retrieveByUsername';

    // don't allow to sign in with an empty username
    if ($email) {
      $user = $this->getTable()->retrieveByEmailSellers($email);
      // user exists?
      if ($user) {
        // el usuario esta activo?
        if (isset($user->blocked_at) && $user->blocked_at > date('Y-m-d H:i:s')) {
          throw new sfValidatorError($this, 'blocked');
        }
        if (!$user->isActive()) {
          throw new sfValidatorError($this, 'invalid');
        }
        // password is ok?
        if ($user->checkPassword($password)) {
          sfContext::getInstance()->getUser()->setAttribute('company', $user->getCompany()->getId());
          return array_merge($values, array('user' => $user));
        }
        
        
        
      }
    }
    if ($this->getOption('throw_global_error')) {
      throw new sfValidatorError($this, 'invalid');
      // throw new sfValidatorError($this, 'blocked');
    }

    throw new sfValidatorErrorSchema($this, array($this->getOption('email_field') => new sfValidatorError($this, 'invalid')));
  }

  protected function getTable() {
    return Doctrine::getTable('sfGuardUser');
  }

}

?>
