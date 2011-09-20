<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of registerForm
 *
 * @author diegohome
 */
class commentForm extends sfForm {

  //put your code here


  public function configure() {
    $this->setWidgets(array(
        'comment' => new sfWidgetFormTextarea(),

        
    ));

    $this->setValidators(array(        
        'comment' => new sfValidatorString(
                array('max_length' => 750, 'required' => true),
                array('required' => 'El \'Nombre\' no puede ser vacio', 'max_length' => 'Limite de %max_length% Caracteres'))

        
        
    ));
    


    $this->widgetSchema->setNameFormat('comment[%s]');
  }

}

?>
