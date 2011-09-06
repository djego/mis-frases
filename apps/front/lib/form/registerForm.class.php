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
    $years = range(date('Y') - 100, date('Y') - 1);
    $this->setWidgets(array(
        'id' => new sfWidgetFormInputHidden(),
        'first_name' => new sfWidgetFormInput(),
        'last_name' => new sfWidgetFormInput(),
        'username' => new sfWidgetFormInput(),
        'email_address' => new sfWidgetFormInput(),
        're-email_address' => new sfWidgetFormInput(),
        'password' => new sfWidgetFormInputPassword(),
        're-password' => new sfWidgetFormInputPassword(),
        'city' => new sfWidgetFormInput(),
        'province' => new sfWidgetFormInput(),
        'country' => new sfWidgetFormSelect(array('choices' => mfConstant::$ar_country)),
        'birthday' => new sfWidgetFormDate(array(
            'format' => '%day%&nbsp;%month%&nbsp;%year%',
            'months' => mfConstant::$ar_month,
            'years'=> array_combine($years, $years)
            )),
        'gender' => new sfWidgetFormSelectRadio(array('choices' => mfConstant::$ar_gender)),
        'agree'      => new sfWidgetFormInputCheckbox(),
        
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
                array('max_length' => 150, 'min_length' => 3, 'required' => true),
                array('required' => 'El nombre de usuario no puede ser vacio')),
        'email_address' => new sfValidatorEmail(
                array('required' => true),
                array(
                    'required' => 'El \'E-mail\' no puede ser vacio',
                    'invalid' => 'El \'E-mail\' ingresado no es v&aacute;lido.')),
        're-email_address' => new sfValidatorEmail(
                array('required' => true),
                array(
                    'required' => 'Debe confirmar su E-mail',
                    'invalid' => 'El \'E-mail\' ingresado no es v&aacute;lido.')),
        'password' => new sfValidatorString(
                array('min_length' => 5, 'max_length' => 20),
                array(
                    'min_length' => 'La  \'Contrase&ntilde;a\' debe tener al menos 5 caracteres',
                    'max_length' => 'La  \'Contrase&ntilde;a\' debe tener como m&aacute;ximo 20 caracteres',
                    'required' => 'La  \'Contrase&ntilde;a\' no puede ser vacia')),
        're-password' => new sfValidatorString(
                array(),
                array('required' => 'Debe confirmar su  \'Contrase&ntilde;a\'')),
        'city' => new sfValidatorString(
                array('max_length' => 100, 'required' => false),
                array('max_length' => 'Maximo de caracteres permitidos %max_length%')),
        'province' => new sfValidatorString(
                array('max_length' => 100, 'required' => false),
                array('max_length' => 'Maximo de caracteres permitidos %max_length%')),
        'country' => new sfValidatorChoice(
                array('choices' => mfConstant::$ar_country), array('required' => 'Seleccione Pais')),
        'birthday' => new sfValidatorDate(array(),array('required' => 'Ingrese su fecha de nacimiento')),
        'gender'  => new sfValidatorChoice(array('choices' => array_keys(mfConstant::$ar_gender)), array('required' => 'Seleccione genero')),
        'agree'       => new sfValidatorBoolean(
          array('required' => true),
          array('required' => 'Para registrarse debe estar de acuerdo con las Condiciones de uso y la politica')),
    
        
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
