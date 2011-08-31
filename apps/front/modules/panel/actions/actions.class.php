<?php

/**
 * panel actions.
 *
 * @package    frases
 * @subpackage panel
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class panelActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
//    $this->forward('default', 'module');
  }
  
  public function executeCreatePhrase(sfWebRequest $request)
  {
    if(!$this->getUser()->isAuthenticated()){
      $this->forward('signin', 'signin');
    }
    
    
  }
  public function executeUserBookPhrase(sfWebRequest $request){
    
  }
  
  
  
}
