<?php

class BasesfGuardRegisterActions extends sfActions {

  public function executeIndex(sfWebRequest $request) {
    if ($this->getUser()->isAuthenticated()) {
      $this->getUser()->setFlash('notice', 'You are already registered and signed in!');
      $this->redirect('@homepage');
    }

    $this->form = new registerForm();
   
    if ($request->isMethod('post')) {
      $requestData = $request->getParameter($this->form->getName());
      if (sfConfig::get('app_recaptcha_active', false)) {
        $requestData['challenge'] = $this->getRequestParameter('recaptcha_challenge_field');
        $requestData['response'] = $this->getRequestParameter('recaptcha_response_field');
      }
      $this->form->bind($requestData);
       print_r($requestData);
      if ($this->form->isValid()) {

        $ar_val_user = $this->form->getValues();

        $this->processRegister($ar_val_user);
      }
    }
  }

  protected function processRegister($a_user) {
//    print_r($a_user);die();
    // Grabando el usuario
    $dbr_user = new sfGuardUser();
    // asignar puntos por registrarse mediante una invitacion

    $dbr_user->setFirstName($a_user['first_name']);
    $dbr_user->setLastName($a_user['last_name']);
    $dbr_user->setEmailAddress($a_user['email_address']);
    $dbr_user->setUsername($a_user['username']);
    $dbr_user->setPassword($a_user['password']);
    $dbr_user->save();
    $this->getUser()->signIn($dbr_user);

    $this->redirect('@homepage');
  }

}