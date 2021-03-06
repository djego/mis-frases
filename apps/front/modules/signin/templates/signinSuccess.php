 <?php slot('subtitle', sprintf('Necesitar logearte para publicar. ')); ?>
<div class="body-colum2-centro2">

<div id="link-color" class="login-tx">

Para publicar en mis-frases es necesario primero registrarse o, si ya estás registrado, estar logado. El registro es gratis, rápido y sencillo. Una vez registrado podrás publicar frases, construir tu propia página con todas las frases publicadas por tí, tus frases favoritas de otros usuarios, tus comentarios y las fotos e imágenes publicadas por tí. Recibirás un aviso por correo electrónico cada vez que alguien comente una frase publicada por tí o cuando otros usuarios comentan tu perfil. Podrás hacer amigos y seguir la actividad de los autores de tus frases favoritas. <br><br>

Después de rellenar el <a href="<?php echo url_for('register')?>">formulario de registro</a> y aceptar los términos y condiciones, solo tienes que activar tu cuenta haciendo clic en el enlace que enviamos al correo elecrónico que nos has facilitado y a partir de este momento podrás empezar a rellenar tu página y publicar tus frases. <br><br>

Si ya estás registrado, para publicar sólo debes logarte con nombre de usuario y contraseña en la tabla de login: 

</div>
<?php if($sf_user->hasFlash('notice')):?>
  <h3><?php echo $sf_user->getFlash('notice'); ?></h3>
<?php endif; ?>
<div class="login">
    <form name="login" method="post" action="">
      <?php echo $form['username']->renderError(); ?>
    	<div class="login-acceso1">
          Usuario: <?php echo $form['username']->render(array('class' => 'user','size' => 15)) ?>
          
        </div>
    	<div class="login-acceso2">Contraseña <?php echo $form['password']->render(array('class' => 'pass','size' => 15)) ?>
         
        </div>
            <?php if ($form->isCSRFProtected()) : ?>
              <?php echo $form['_csrf_token']->render(); ?>
            <?php endif; ?>

            
    	<div id="navi" class="header-acceso3">
        
        <ul>
        <li> <input type="submit" class="btn_login" value="Ingresar" />/li>
        </ul>
        
        </div>
    </form>

  
   	  <div class="header-acceso4">
        <ul>
        <li><a href="<?php echo url_for('register'); ?>">Quiero registrarme</a></li>
        <li><a href="<?php echo url_for('recovery_pass'); ?>">Olvide mi contraseña</a></li>
        </ul>
      </div>
      
</div>
	<div class="login-tx2">
		Gracias por participar en la comunidad de frases mas divertida de Internet. 
	</div>

</div>

<div class="body-colum3">

	<!-- panel derecha --><!-- FIN panel derecha -->
    
    <!-- panel derecha --><!-- FIN panel derecha -->
    <!-- panel derecha --><!-- FIN panel derecha -->
    
  

</div>










