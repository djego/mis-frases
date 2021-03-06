<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.png" rel="icon" type="image/png" />
  </head>


  <body>
    <div class="cont">

      <!-- header -->

      <div class="header">
        <div class="header-logo">
          <ul>
            <li><a href="<?php echo url_for('homepage'); ?>">mis frases</a></li>
          </ul>
        </div>



        <div class="header-acceso">
          <?php if (!$sf_user->isAuthenticated()): ?>
            <?php $form = new sfGuardFormSignin(); ?>
            <form action="<?php echo url_for('login'); ?>" method="post" name="login">
              <?php if ($form->isCSRFProtected()) : ?>
                <?php echo $form['_csrf_token']->render(); ?>
              <?php endif; ?>
              <div class="header-acceso1">Usario <?php echo $form['username']->render(array('size' => '14')) ?></div>
              <div class="header-acceso2">Contraseña <?php echo $form['password']->render(array('size' => '14')) ?></div>
              <div class="header-acceso3" id="navi"> <input type="submit" value="Ingresar" /></div>
            </form>
            <div class="header-acceso4">
              <ul>
                <li><a href="<?php echo url_for('register') ?>">Quiero registrarme</a></li>
                <li><a href="<?php echo url_for('recovery_pass') ?>">Olvide mi contraseña</a></li>
              </ul>
            </div>
          <?php else: ?>
            <form name="login" method="post" action="">
              <div class="header-acceso1"></div>
              <div id="navi" class="header-acceso3"> </div>
            </form>
            <div class="header-acceso4"></div>
          <?php endif; ?>
          <div class="header-acceso5" id="navi2">
            <ul>
              <li><a href="<?php echo url_for('new_phrase') ?>">Publicar una frase</a></li>
              <li></li>
            </ul>
          </div>
        </div>

        <div class="header-tx">
          Bienvenid@s a mis-frases, la primera comunidad internacional de 
          amigos que publican, comparten, votan y comentan sus frases,
          refranes, citas, nicks y escritos favoritos. ¡Participa en
          mis-frases!
          <?php if (!$sf_user->isAuthenticated()): ?>
            <div class="header-caja" id="header-link-color">
              <div class="header-entrar">
                <a href="<?php echo url_for('login') ?>"><img src="/images/icon/entrar.png" width="16" height="16" border="0" /></a>
                <a href="<?php echo url_for('login') ?>">Entrar</a>
              </div>
              <div class="header-registrate">
                <a href="<?php echo url_for('register') ?>"><img src="/images/icon/registrate.png" width="16" height="16" border="0" /></a>
                <a href="<?php echo url_for('register') ?>">Registrate</a></div>
            </div>
          <?php else: ?>
            <div class="header-caja" id="header-link-color">

              <div class="header-entrado">
                <img width="16" height="16" border="0" src="/images/icon/entrar.png"><em>Bienvenido(a)&nbsp; <?php echo $sf_user->getGuardUser()->getUsername(); ?>&nbsp;<a href="<?php echo url_for('panel',array('uniq' =>$sf_user->getGuardUser()->getUsername())) ?>">Mi panel</a> | <a href="<?php echo url_for('logout') ?>">Salir </a>|</em>
              </div>
            </div>

          <?php endif; ?>

        </div>



        <div></div>
      </div>

      <!-- columna 01 -->

      <div class="body-colum1">
        <div class="body-colum1-int">
          <div class="body-colum1-int2">Total de frases publicadas</div>
          <div class="body-colum1-int3"><?php echo count(Doctrine::getTable('mfPhrase')->getCounts()); ?></div>

          <!-- separador-->
          <div class="body-colum1-int4-separador"></div>
          <!-- FIN separador-->

          <div id="menu">
            <ul>
              <li><a href="<?php echo url_for('homepage'); ?>">Inicio</a></li>
              <li><a href="<?php echo url_for('new_phrase') ?>">Publicar una frase</a></li>
              <li><a href="<?php echo url_for('category') ?>">Categoria de frases</a></li>
              <li><a href="<?php echo url_for('news') ?>">Novedades</a></li>
              <li><a href="<?php echo url_for('users_list') ?>">Nuestros usuarios</a></li>
              <li><a href="http://frases-citas.euroresidentes.com/" 
                     target="_blank">Blog de mis frases</a></li>
            </ul>
          </div>
          <!-- siguenos en facebook twetter-->
          <div class="body-colum1-facebook">
            <div class="body-colum1-fb2">Sigue mis frases</div>
            <div class="body-colum1-fb-cont">
              <div class="body-colum1-fb3"><a href="#" target="_blank"><img src="/images/facebook.png" width="37" height="37" border="0" /></a></div>
              <div class="body-colum1-fb4"><a href="#" target="_blank"><img src="/images/tweeter.png" width="37" height="37" border="0" /></a></div>
            </div>
          </div>
          <!-- FIN siguenos en facebook twetter-->

          <!-- usuarios -->     
          <div class="body-colum1-usuarios">
            <div class="body-colum1-usuarios-cont">
              <div class="body-colum1-usu2"><img src="/images/icon-usuarios.jpg" width="12" height="14" border="0" /></div>
              <div class="body-colum1-usu3">Usuarios más activos</div>
            </div>
            <div class="body-colum1-usuarios-cont-tabla" id="ul">
              <ul>
                <?php $lst_users = Doctrine::getTable('sfGuardUser')->getUsersActive(12); ?>
                <?php foreach ($lst_users as $user): ?>
                  <?php
                  if ($user['gender'] == 'M') {
                    $img = 'male.jpg';
                  } else {
                    $img = 'female.jpg';
                  }
                  ?>
                  <li><a href="<?php echo url_for('panel', array('uniq' => $user['username']))?>"><img src="/images/icon/<?php echo $img; ?>" width="44" height="44" border="1" /></a></li>
                <?php endforeach; ?>


              </ul>
            </div>
            <div class="body-colum1-usu4"><a href="<?php echo url_for('users_list') ?>">Ver más..</a></div>
            <p>&nbsp;</p>
          </div>
          <!-- FIN usuarios -->





        </div>
      </div>

      <!-- FIN columna 01 -->

      <!-- columna 02 buscador -->
      <div class="body-colum2-centro">
        <div class="body-colum2-buscador">
          <div class="body-colum2-buscador-lupa"></div>
          <form id="form1" name="form1" method="post" action="<?php echo url_for('homepage') ?>" enctype="multipart/form-data">
            <div class="body-colum2-buscador-campo">

              <input name="q" id="q" type="text" size="60" maxlength="60" value="<?php echo $sf_request->getParameter('q') ?>" />

            </div>
            <div class="body-colum2-buscador-boton" id="buscador">

              <input type="submit" value="Buscar"/>

            </div>
          </form>
          <div class="body-colum2-buscador-campo2">Buscar frases por categoría, palabra clave, autor o usuario. </div>
        </div>
        <div class="body-colum2-titulo">
          <ul><li><?php include_slot('subtitle') ?></li></ul></div>
      </div>

      <!-- FIN columna 02 buscador -->

<?php echo $sf_content ?>
      <div class="footer"></div>
    </div>




  </body>
</html>

