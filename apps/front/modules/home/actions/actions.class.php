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
  }

  public function executeUserReadComment(sfWebRequest $request) {
    $this->forward404Unless($this->phrase = Doctrine::getTable('mfPhrase')->find($request->getParameter('id')));
  }

}

