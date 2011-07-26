<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Administrador de Mis-frases</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          <a href="<?php echo url_for('homepage') ?>">
            ADMINISTRADOR  MIS FRASES
          </a>
        </h1>
      </div>
 
      <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Categorias', 'mf_category') ?>
          </li>
          <li>
            <?php echo link_to('Frases', 'mf_phrase') ?>
          </li>
          <li>
            <?php echo link_to('Comentarios', 'mf_comment') ?>
          </li>
          <li>
            <?php echo link_to('Usuarios', 'sf_guard_user') ?>
          </li>
          <li style="float: right">
            <?php if($sf_user->getGuardUser()): ?>
            <span><?php echo $sf_user->getGuardUser()->getEmailAddress(); ?></span>
            <a href="guard/logout">Cerrar</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
 
      <div id="content">
        <?php echo $sf_content ?>
      </div>
 
      <div id="footer">
       
        Propociado por Djego
        
      </div>
    </div>
  </body>
</html>