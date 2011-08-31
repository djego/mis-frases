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
class registerForm extends reCaptchaForm {

  //put your code here


  public function configure() {
    $this->setWidgets(array(
        'id' => new sfWidgetFormInputHidden(),
        'first_name' => new sfWidgetFormInput(),
        'last_name' => new sfWidgetFormInput(),
        'username' => new sfWidgetFormInput(),
        'email_address' => new sfWidgetFormInput(),
        'password' => new sfWidgetFormInputPassword(),
        're-password' => new sfWidgetFormInputPassword()
    ));

    $this->setValidators(array(
        'id' => new sfValidatorPass(),
        'first_name' => new sfValidatorString(
                array('max_length' => 150, 'required' => true),
                array('required' => 'El \'Nombre\' no puede ser vacio')),
        'last_name' => new sfValidatorString(
                array('max_length' => 150, 'required' => true),
                array('required' => 'El \'Apellido\' no puede ser vacio')),
        'username' => new sfValidatorString(
                array('max_length' => 150, 'required' => true),
                array('required' => 'El nombre de usuario no puede ser vacio')),
        'email_address' => new sfValidatorEmail(
                array('required' => true),
                array(
                    'required' => 'El \'E-mail\' no puede ser vacio',
                    'invalid' => 'El \'E-mail\' ingresado no es v&aacute;lido.')),
        'password' => new sfValidatorString(
                array('min_length' => 5, 'max_length' => 20),
                array(
                    'min_length' => 'La  \'Contrase&ntilde;a\' debe tener al menos 5 caracteres',
                    'max_length' => 'La  \'Contrase&ntilde;a\' debe tener como m&aacute;ximo 20 caracteres',
                    'required' => 'La  \'Contrase&ntilde;a\' no puede ser vacia')),
        're-password' => new sfValidatorString(
                array(),
                array('required' => 'Debe confirmar su  \'Contrase&ntilde;a\''))
    ));
    
    if (sfConfig::get('app_recaptcha_active', false)) {
      $this->setWidget('response', new sfWidgetFormInput());

      $this->validatorSchema->setOption('allow_extra_fields', true);
      $this->validatorSchema->setOption('filter_extra_fields', false);
    }
    

    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
                new sfValidatorDoctrineUnique(
                        array('model' => 'sfGuardUser', 'column' => 'email_address', 'primary_key' => 'id', 'throw_global_error' => false),
                        array('invalid' => 'El email ingresado ya esta registrado')),
                new sfValidatorDoctrineUnique(
                        array('model' => 'sfGuardUser', 'column' => 'username', 'primary_key' => 'id', 'throw_global_error' => false),
                        array('invalid' => 'El nombre de \'Usuario\' no est&aacute; dispobible')),
                new sfValidatorSchemaCompare(
                        'password', '==', 're-password',
                        array('throw_global_error' => true),
                        array('invalid' => 'Contraseña no coincide')
                ),
        new sfValidatorSchemaReCaptcha('challenge', 'response')
            )));

    



    $this->widgetSchema->setNameFormat('register[%s]');
  }

}

?>
