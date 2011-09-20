<?php

/**
 * home actions.
 *
 * @package    frases
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions {

  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function preExecute() {
    if ($this->getUser()->isAuthenticated()) {
      $this->user_id = $this->getUser()->getGuardUser()->getId();
    }
  }

  public function executeIndex(sfWebRequest $request) {

    $params_right = array();
    $query = Doctrine::getTable('mfPhrase')->getPhrases($request->getParameter('q'));
    $this->lst_phrase = $query;

    $this->last_phrases = Doctrine::getTable('mfPhrase')->getPhrases();
    $params_right['last_phrases'] = $this->last_phrases;
    $this->params_right = $params_right;
  }

  public function executeCategory(sfWebRequest $request) {
    $this->lst_category = Doctrine::getTable('mfCategory')->findAll();

    $this->last_phrases = Doctrine::getTable('mfPhrase')->getPhrases();
    $params_right['last_phrases'] = $this->last_phrases;
    $this->params_right = $params_right;
  }

  public function executeCategoryList(sfWebRequest $request) {
    $rs_category = Doctrine::getTable('mfCategory')->findOneBySlug($request->getParameter('slug'));
    $this->forward404Unless($rs_category);
    $this->rs_category = $rs_category;
    $this->lst_phrase = Doctrine::getTable('mfPhrase')->getPharsesPerCategory($rs_category->id);



    $this->last_phrases = Doctrine::getTable('mfPhrase')->getPhrases();
    $params_right['last_phrases'] = $this->last_phrases;
    $this->params_right = $params_right;
  }

  public function executeNews(sfWebRequest $request) {
    
  }

  public function executeUsers(sfWebRequest $request) {
    $this->lst_user_active = Doctrine::getTable('sfGuardUser')->getUsersActive(10);
  }

  public function executeUserSendFriend(sfWebRequest $request) {
    $this->forward404Unless($this->phrase = Doctrine::getTable('mfPhrase')->find($request->getParameter('id')));
    $this->form = new sendFriendForm();
    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter('send_friend'));
      if ($this->form->isValid()) {
        $values = $this->form->getValues();
        $values['frase'] = $this->phrase->content;
        $message = Swift_Message::newInstance()
                ->setFrom(array('mis.frases.dev@gmail.com' => 'Mis-Frases'))
                ->setTo($values['email_to'])
                ->setSubject($values['name_to'].', te recomiendo este mensaje')
                ->setBody($this->getPartial('global/send_friend', array('data' => $values)))
                ->setContentType('text/html');

        $this->getMailer()->send($message);

        $this->getUser()->setFlash('notice', 'Mensaje enviado con exito!');
        $this->redirect($request->getUri());
      }
    }
  }

  public function executeUserReadComment(sfWebRequest $request) {
    $this->forward404Unless($this->phrase = Doctrine::getTable('mfPhrase')->find($request->getParameter('id')));
    $this->lst_comment = Doctrine::getTable('mfComment')->findByPhraseId($this->phrase->id);


    $this->form = new commentForm();
    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter('comment'));
      if ($this->form->isValid()) {
        $values = $this->form->getValues();
        $mf_comment = new mfComment();
        $mf_comment->setPhraseId($this->phrase->id);
        $mf_comment->setUserId($this->user_id);
        $mf_comment->setComment($values['comment']);
        $mf_comment->save();
        $this->getUser()->setFlash('notice', 'Comentario fue enviado con exito');
        $this->redirect($request->getUri());
      }
    }
  }

}

