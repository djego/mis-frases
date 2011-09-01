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
    $this->lst_phrase = Doctrine::getTable('mfPhrase')->createQuery()->orderBy('created_at')->limit(10)->execute();
  }

  public function executeCategory(sfWebRequest $request) {
    $this->lst_category = Doctrine::getTable('mfCategory')->findAll();
  }

  public function executeCategoryList(sfWebRequest $request) {
    $rs_category = Doctrine::getTable('mfCategory')->findOneBySlug($request->getParameter('slug'));
    $this->forward404Unless($rs_category);
    $this->lst_phrase = Doctrine::getTable('mfPhrase')
            ->createQuery()
            ->where('category_id =?',$rs_category->id)
            ->orderBy('created_at')->execute();
    
  }

  public function executeNews(sfWebRequest $request) {
    
  }

  public function executeUsers(sfWebRequest $request) {
    
  }

}

