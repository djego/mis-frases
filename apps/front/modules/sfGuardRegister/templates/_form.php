<?php use_helper('I18N') ?>
<?php use_helper('recaptcha') ?>
<form action="<?php echo url_for('register') ?>" method="post">

  <div>
    <label>Nombre de usuario</label>
    <?php echo $form['username']->render(); ?>
  </div>
  <div>
    <label>Email</label>
    <?php echo $form['email_address']->render(); ?>
  </div>
  <div>
    <label>Nombre(s)</label>
    <?php echo $form['first_name']->render(); ?>
  </div>
  <div>
    <label>Apellidos</label>
    <?php echo $form['last_name']->render(); ?>
  </div>
  <div>
    <label>Contraseña</label>
    <?php echo $form['password']->render(); ?>
  </div>
  <div>
    <label>Repetir Contraseña</label>
    <?php echo $form['re-password']->render(); ?>
  </div>
<?php if (sfConfig::get('app_recaptcha_active', false)): ?>
<?php echo recaptcha_get_html(sfConfig::get('app_recaptcha_publickey'), $form['response']->getError()) ?>
<?php endif ?>
  
    <?php if ($form->isCSRFProtected()) : ?>
    <?php echo $form['_csrf_token']->render(); ?>
    <?php endif; ?>   

          <input type="submit" name="button_save" value="<?php echo __('Register', null, 'sf_guard') ?>" />


</form>