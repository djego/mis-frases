<?php slot('subtitle', sprintf('Reenviar Contraseña.')); ?>

<div class="body-colum2-centro2">

  <div id="link-color" class="login-tx"></div>

  <div class="login">  

<h2><?php echo 'Hola '. $user->getName(); ?></h2>

<h3>Ingresa tu nueva contrase&ntilde;a </h3>
<form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key='.$sf_request->getParameter('unique_key')) ?>" method="POST">
  <table>
    <tbody>
      <?php echo $form ?>
    </tbody>
    <tfoot><tr><td><input type="submit" name="change" value="Cambiar" /></td></tr></tfoot>
  </table>
</form>
  </div>
  <div class="login-tx2"></div>

</div>

<div class="body-colum3">

  <!-- panel derecha --><!-- FIN panel derecha -->

  <!-- panel derecha --><!-- FIN panel derecha -->
  <!-- panel derecha --><!-- FIN panel derecha -->



</div>
