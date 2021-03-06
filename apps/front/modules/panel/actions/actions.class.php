<?php

/**
 * panel actions.
 *
 * @package    frases
 * @subpackage panel
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class panelActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function preExecute() {
//    if(!$this->getUser()->isAuthenticated()){
//      $this->forward('signin', 'signin');
//    }
//    $this->user_id = $this->getUser()->getGuardUser()->getId();
//    
  }

  public function executeIndex(sfWebRequest $request) {
//    $this->forward('default', 'module');
    $this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq'));
  }

  public function executeCreatePhrase(sfWebRequest $request) {


    if (!$this->getUser()->isAuthenticated()) {
      $this->forward('signin', 'signin');
    }
    $this->user_id = $this->getUser()->getGuardUser()->getId();

    $this->user = Doctrine::getTable('sfGuardUser')->find($this->user_id);

    $this->form = new mfPhraseForm();

    if ($request->isMethod('post')) {
      $params = $request->getParameter($this->form->getName());
      $params['user_id'] = $this->user_id;
      $this->form->bind($params);
      if ($this->form->isValid()) {
        $this->form->save();
        $this->getUser()->setFlash('notice', 'Se ha publicado su frase exitosamente!');
        $this->redirect('homepage');
      }
    }
  }

  public function executeUserBookPhrase(sfWebRequest $request) {
    $this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq'));
    $this->user_friends = '';
  }

  public function executePhraseSend(sfWebRequest $request) {
    $this->forward404Unless($this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq')));
    $this->lst_phrase = Doctrine::getTable('mfPhrase')->findByUserId($this->user->id);
    
    
  }

  public function executePhraseFav(sfWebRequest $request) {
    $this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq'));
    
    $lst_phrases = Doctrine::getTable('mfPhrasesFavority')->getFrasesFavoritas($this->user->id);
    $this->lst_phrase = $lst_phrases;
  }

  public function executeMyFriends(sfWebRequest $request) {
    $this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq'));
  }

  public function executeMyComments(sfWebRequest $request) {
    $this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq'));
  }

  public function executeMyToday(sfWebRequest $request) {
    $this->user = Doctrine::getTable('sfGuardUser')->findOneByUsername($request->getParameter('uniq'));
  }

}
