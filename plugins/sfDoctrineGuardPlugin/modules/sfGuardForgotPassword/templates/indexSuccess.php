<?php slot('subtitle', sprintf('Reenviar Contraseña.')); ?>

<div class="body-colum2-centro2">

  <div id="link-color" class="login-tx"></div>

  <div class="login">  
    <form name="login" action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post">
      <div class="login-acceso1"></div>
      <div class="login-acceso2">Email<?php echo $form['email_address'] ?></div>

      <?php if ($form->isCSRFProtected()) : ?>
        <?php echo $form['_csrf_token']->render(); ?>
      <?php endif; ?>   

      <div id="navi" class="header-acceso3">
        <input type="submit" name="change" value="Enviar" />
      </div>

    </form>

  </div>
  <div class="login-tx2"></div>

</div>

<div class="body-colum3">

  <!-- panel derecha --><!-- FIN panel derecha -->

  <!-- panel derecha --><!-- FIN panel derecha -->
  <!-- panel derecha --><!-- FIN panel derecha -->



</div>


