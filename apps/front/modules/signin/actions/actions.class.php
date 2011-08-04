<?php

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Diego Machaca <diego.machaca@gmail.com>
 * @version    GIT: $Id$
 */
class signinActions extends sfActions {

  public function executeSignin($request) {

    $user = $this->getUser();
//    echo $user->getAttribute('trylogin');
    if ($user->isAuthenticated()) {
      return $this->redirect('@homepage');
    }
    $this->form = new sfGuardFormSignin();

    if ($request->isMethod('post')) {
      $val_form = $request->getParameter('signin');

      $this->form->bind($val_form);
      if ($this->form->isValid()) {
        $values = $this->form->getValues();
        $this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);

        // always redirect to a URL set in app.yml
        // or to the referer
        // or to the homepage
//        $sf_guard_user = Doctrine::getTable('sfGuardUser')->find($values['user']->id);
//        $sf_guard_user->loginsuccess();
//        $sf_guard_user->save();
//        if ($this->getUser()->getAttribute('trylogin')) {
//          $this->getUser()->getAttributeHolder()->remove('trylogin');
//        }


        $signinUrl = sfConfig::get('app_sf_guard_plugin_success_signin_url', $user->getReferer($request->getReferer()));
        return $this->redirect('' != $signinUrl ? $signinUrl : '@homepage');
      } 
    }else {
      if ($request->isXmlHttpRequest()) {
        $this->getResponse()->setHeaderOnly(true);
        $this->getResponse()->setStatusCode(401);

        return sfView::NONE;
      }           
      
      // if we have been forwarded, then the referer is the current URL
      // if not, this is the referer of the current request
      $user->setReferer($this->getContext()->getActionStack()->getSize() > 1 ? $request->getUri() : $request->getReferer());

      $module = sfConfig::get('sf_login_module');
      if ($this->getModuleName() != $module) {
        return $this->redirect($module . '/' . sfConfig::get('sf_login_action'));
      }

      $this->getResponse()->setStatusCode(401);  
    }
  }


  public function executeSignout($request) {

//    $user_id = $this->getUser()->getUserId();

    $this->getUser()->signOut();


    $signoutUrl = sfConfig::get('app_sf_guard_plugin_success_signout_url', $request->getReferer());

    $this->redirect('' != $signoutUrl ? $signoutUrl : '@homepage');
  }

  public function executeUnblockedAccount($request) {
    $dbr_user = Doctrine::getTable('sfGuardUser')->findOneByUniq($request->getParameter('un'));
    $dbr_user->unblockedaccount();
    if ($this->getUser()->getAttribute('trylogin')) {
      $this->getUser()->getAttributeHolder()->remove('trylogin');
    }
    $this->redirect('@login');
  }

  public function executeSecure($request) {
    $this->getResponse()->setStatusCode(403);
  }

  public function executePassword($request) {
    throw new sfException('This method is not yet implemented.');
  }

  protected function getRSession($name) {
    return $this->getUser()->getAttribute($name, array());
  }

  protected function setRSession($name, $value) {
    return $this->getUser()->setAttribute($name, $value);
  }

}

