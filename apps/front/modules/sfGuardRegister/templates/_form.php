<?php use_helper('I18N') ?>
<?php use_helper('recaptcha') ?>
<form action="<?php echo url_for('register') ?>" method="post" name="form" id="form_publicar">

  <table width="200" border="0">
    <tbody><tr>
        <td>&nbsp;</td>
        <td><p>
            <label for="miembro_login3">Nombre de usuario</label>
            (mínimo 3 caracteres)&nbsp;<br>
            <?php echo $form['username']->render(array('size' => 30)); ?>
            <?php echo $form['username']->renderError()?>
          </p>
          <p>
            <label for="miembro_nombre">Tu nombre y apellido</label>
            (no se mostrará)&nbsp;<br>

            <?php echo $form['first_name']->render(array('size' => 20)); ?>
            <?php echo $form['first_name']->renderError()?>

            <?php echo $form['last_name']->render(array('size' => 20)); ?> 
            <?php echo $form['last_name']->renderError()?>
          </p>
          <p>
            <label for="miembro_email">Tu dirección de correo electrónico actual</label>
            <br>
            <?php echo $form['email_address']->render(array('size' => 30)); ?>
            <?php echo $form['email_address']->renderError()?>
          </p>
          <p>
            <label for="miembro_email_confirmation">Repite la dirección de correo electrónico</label>
            <br>
            <?php echo $form['re-email_address']->render(array('size' => 30)); ?>
            <?php echo $form['re-email_address']->renderError()?>
          </p>
          <p>
            <label for="miembro_password">Contraseña</label>
            (mínimo 6 caracteres y máximo 16)&nbsp;<br>
            <?php echo $form['password']->render(array('size' => 30)); ?>
            <?php echo $form['password']->renderError()?>
          </p>
          <p>
            <label for="miembro_password_confirmation">Repite la contraseña</label>
            <br>
            <?php echo $form['re-password']->render(array('size' => 30)); ?>
            <?php echo $form['re-password']->renderError()?>
          </p>
          <p>
            <label for="miembro_sexo_hombre">Sexo</label>
            <br>
            <?php echo $form['gender']->render(); ?>
            <?php echo $form['gender']->renderError()?>
          </p>
          <p>
            <label for="miembro_nacimiento_3i">Tu fecha de nacimiento</label>
            <br>
            <?php echo $form['birthday']->render(); ?>
            <?php echo $form['birthday']->renderError()?>

          </p>
          <p>
            <label for="miembro_ciudad">Ciudad</label>
            <br>
           <?php echo $form['city']->render(array('size' => 30)); ?>
          </p>
          <p>
            <label for="miembro_provincia">Provincia</label>
            <br>
            <?php echo $form['province']->render(array('size' => 30)); ?>
          </p>
          <p>
            <label for="miembro_pais">País</label>
            <br>
            <?php echo $form['country']->render();?>
            <?php echo $form['birthday']->renderError()?>
          </p>
          <p>
            
            <?php echo $form['agree']->render();?>
            <label for="miembro_condiciones_de_uso">He leído y convengo las&nbsp;<a href="http://www.mi-web.org/aviso_legal">Condiciones de Uso</a>&nbsp;y la&nbsp;<a href="http://www.mi-web.org/privacyPolicy.html">Política de Confidencialidad</a>&nbsp;<br>
              <em>Nota:</em>&nbsp;las cuentas de usuarios con contenido inadecuado podrán ser eliminadas sin previo aviso.</label>
            <?php echo $form['agree']->renderError()?>
          </p>
          <p>
            <label for="recaptcha_challenge_field">¿Eres humano?</label>
            <br>
          </p>
          <?php if (sfConfig::get('app_recaptcha_active', false)): ?>
            <?php echo recaptcha_get_html(sfConfig::get('app_recaptcha_publickey'), $form['response']->getError()) ?>
          <?php endif ?>
          <?php if ($form->isCSRFProtected()) : ?>
            <?php echo $form['_csrf_token']->render(); ?>
          <?php endif; ?>  
          <p>
            <input type="submit" value="Registrarme" onclick="if (window.hiddenCommit) { window.hiddenCommit.setAttribute('value', this.value); }else { hiddenCommit = document.createElement('input');hiddenCommit.type = 'hidden';hiddenCommit.value = this.value;hiddenCommit.name = this.name;this.form.appendChild(hiddenCommit); }this.setAttribute('originalValue', this.value);this.disabled = true;this.value='Enviando...';result = (this.form.onsubmit ? (this.form.onsubmit() ? this.form.submit() : false) : this.form.submit());if (result == false) { this.value = this.getAttribute('originalValue');this.disabled = false; }return result;" name="commit">
          </p></td>
      </tr>
    </tbody></table>
</form>
