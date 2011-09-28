<?php

/**
 * mfPhrase form base class.
 *
 * @method mfPhrase getObject() Returns the current form's model object
 *
 * @package    frases
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasemfPhraseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'title'        => new sfWidgetFormTextarea(),
      'content'      => new sfWidgetFormTextarea(),
      'category_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'author'       => new sfWidgetFormTextarea(),
      'user_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'visits'       => new sfWidgetFormInputText(),
      'comments'     => new sfWidgetFormInputText(),
      'counter_rate' => new sfWidgetFormInputText(),
      'value_rate'   => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'        => new sfValidatorString(array('max_length' => 50000, 'required' => false)),
      'content'      => new sfValidatorString(array('max_length' => 50000)),
      'category_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'author'       => new sfValidatorString(array('max_length' => 50000, 'required' => false)),
      'user_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'visits'       => new sfValidatorInteger(array('required' => false)),
      'comments'     => new sfValidatorInteger(array('required' => false)),
      'counter_rate' => new sfValidatorInteger(array('required' => false)),
      'value_rate'   => new sfValidatorInteger(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('mf_phrase[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'mfPhrase';
  }

}
