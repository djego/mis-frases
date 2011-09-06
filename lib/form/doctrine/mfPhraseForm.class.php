<?php

/**
 * mfPhrase form.
 *
 * @package    frases
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mfPhraseForm extends BasemfPhraseForm
{
  public function configure()
  {
    unset(
            $this['updated_at'], $this['created_at']
    );
    $this->widgetSchema['category_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => '-------'));
//    $this->widgetSchema['title'] = new sfWidgetFormTextarea();
    
   }
}
