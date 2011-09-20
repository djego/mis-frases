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
class sendFriendForm extends reCaptchaForm {

  //put your code here


  public function configure() {
    $this->setWidgets(array(
        'name_to' => new sfWidgetFormInput(),
        'email_to' => new sfWidgetFormInput(),
        'name_from' => new sfWidgetFormInput(),
        'email_from' => new sfWidgetFormInput(),
        'message' => new sfWidgetFormTextarea(),

        
    ));

    $this->setValidators(array(
        'name_to' => new sfValidatorString(
                array('max_length' => 150, 'required' => true),
                array('required' => 'El nombre de destinatario no puede ser vacio')),
        'email_to' => new sfValidatorEmail(
                array('required' => true),
                array(
                    'required' => 'El \'E-mail\' no puede ser vacio',
                    'invalid' => 'El \'E-mail\' ingresado no es v&aacute;lido.')),
        'name_from'    =>  new sfValidatorString(
                array('max_length' => 150, 'required' => true),
                array('required' => 'El nombre de remitente no puede ser vacio')),
        'email_from' => new sfValidatorEmail(
                array('required' => true),
                array(
                    'required' => 'El \'E-mail\' no puede ser vacio',
                    'invalid' => 'El \'E-mail\' ingresado no es v&aacute;lido.')),
        'message' => new sfValidatorString(
                array('max_length' => 750, 'required' => true),
                array('required' => 'El mensaje no puede ser vacio')),

        
    ));
    
    if (sfConfig::get('app_recaptcha_active', false)) {
      $this->setWidget('response', new sfWidgetFormInput());

      $this->validatorSchema->setOption('allow_extra_fields', true);
      $this->validatorSchema->setOption('filter_extra_fields', false);
    }
    

    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
        new sfValidatorSchemaReCaptcha('challenge', 'response')
            )));


    $this->widgetSchema->setNameFormat('send_friend[%s]');
  }

}

?>
