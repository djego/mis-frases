<?php slot('subtitle', sprintf('Página de %s', $phrase->User->username)); ?>
<?php use_helper('recaptcha') ?>
<div class="body-colum2-centro2">

  <!--usuario-->
  <!--usuario hoja diaria -->
  <div id="link-color" class="usuario-libro-frases-pag-cont">
    <div class="usuario-titulo">
      <strong>Enviar frase a un amigo</strong></div>

    <div class="myform" id="stylized">
      <?php if($sf_user->hasFlash('notice')):?>
      <h4><?php echo $sf_user->getFlash('notice'); ?></h4>
      <?php endif;?>
      <form action="" method="post" name="form" id="form">
        <h1>Formulario</h1>

        <label>Nombre 
          <span class="small">del destinatario</span>
        </label>
        <?php echo $form['name_to']->render(); ?>

        <label>Email 
          <span class="small">del destinatario</span>
        </label>
        <?php echo $form['email_to']->render(); ?>

        <label>Nombre
          <span class="small">del remitente</span>
        </label>
        <?php echo $form['name_from']->render(); ?>

        <label>Email
          <span class="small">del remitente</span>
        </label>
        <?php echo $form['email_from']->render(); ?>

        <label>Mensaje
          <span class="small">del remitente</span>
        </label>
        <?php echo $form['message']->render(); ?>

        <label>Codigo
          <span class="small">de verificacion</span>
        </label>
        <?php if (sfConfig::get('app_recaptcha_active', false)): ?>
            <?php echo recaptcha_get_html(sfConfig::get('app_recaptcha_publickey'), $form['response']->getError()) ?>
          <?php endif ?>
          

        <button type="submit">Enviar</button>
        <div class="spacer"></div>
        <?php if ($form->isCSRFProtected()) : ?>
            <?php echo $form['_csrf_token']->render(); ?>
          <?php endif; ?>  
      </form>
    </div>
  </div>

  <!--FIN usuario hoja diaria -->
</div>

<div class="body-colum3">

  <!-- panel usuario -->
  <div id="link-color" class="menu-comentar-frase-cont">
    <div class="menu-comentar-frase-color-03">
      <div class="menu-comentar-frase-tx">
        Sobre usuario</div>
    </div>
    <div class="menu-comentar-frase-caja-cont-01">
      <div class="menu-comentar-frase-caja-cont-02">


        <div class="menu-comentar-frase-caja-cont-03">
          Votación
          <div class="menu-comentar-frase-caja-03">
            <img width="29" height="27" border="0" src="/images/icon/star-stat01.png">	
            <img width="29" height="27" border="0" src="/images/icon/star-stat02.png">
            <img width="29" height="27" border="0" src="/images/icon/star-stat02.png">
            <img width="29" height="27" border="0" src="/images/icon/star-stat02.png">
            <img width="29" height="27" border="0" src="/images/icon/star-stat02.png">
            <ul id="link-color">
              <li>Nota: 00 votos</li>
              <li>5 visitas</li>
              <li>Comentarios</li>
            </ul><br>

            <ul id="link-color">
              <li><img width="16" height="16" border="0" src="/images/icon/calendar.gif"> Publicado <?php echo Utils::getTimePublic($phrase->created_at)?></li>
              <li><img width="16" height="16" border="0" src="/images/icon/comment.gif"> <a href="<?php echo url_for('user_read_comment',array('id' => $phrase->id))?>">Comentar frase</a></li>
              <li><img width="16" height="16" border="0" src="/images/icon/user.png"> <a href="<?php echo url_for('panel',array('uniq' => $phrase->User->username))?>">Enviado por <?php echo $phrase->User->username?></a></li>
              <li><img width="16" height="16" border="0" src="/images/icon/book--plus.png"> <a href="<?php echo url_for('user_phrases_send',array('user_id' => $phrase->user_id))?>">Más frases de <?php echo $phrase->User->username?></a></li>
            </ul>
          </div>
        </div>
        <!-- FIN caja usuario-->

        <!-- caja menu2 usuario -->


        <!-- FIN caja menu2 usuario -->

      </div>

    </div>


    <div class="panel-usuarios-03"></div>
  </div>
  <!-- FIN panel usuario -->

  

</div>