<?php

/**
 * mfPhraseTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class mfPhraseTable extends Doctrine_Table {

  /**
   * Returns an instance of this class.
   *
   * @return object mfPhraseTable
   */
  public static function getInstance() {
    return Doctrine_Core::getTable('mfPhrase');
  }

  public function getPhrases($criteria = '') {
    $query = $this->createQuery('p');
    $query->innerJoin('p.User s');
    if ($criteria) {
      $query->where('title  like "%' . $criteria . '%" OR content like "%' . $criteria . '%"');
    }
    $query->orderBy('created_at DESC');
    $query->limit(10);
    return $query->execute();
  }
  
  public function getPharsesPerCategory($category_id){
    $query = $this->createQuery('p')
            ->innerJoin('p.User s')
            ->where('category_id =?', $category_id)
                    ->orderBy('created_at');
    $result =  $query->execute();
    return $result;
  }
  
  public function getCounts(){
    $query = $this->createQuery();
    return $query->fetchArray();
    
  }
  
  

}