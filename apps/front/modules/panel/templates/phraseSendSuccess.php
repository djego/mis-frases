<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

  <!--usuario-->
  <!--usuario hoja diaria -->
  <div class="usuario-libro-frases-pag-cont" id="link-color">
    <div class="usuario-titulo">
      <strong>Frases enviadas de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username;?></a></strong></div>

    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-hoja-diaria-01"><img src="images/icon/control.png" width="16" height="16" border="0"> En esta noche tan fria</div>

      <div class="usuario-hoja-diaria-02">
        En esta noche tan fria, yo te ofresco mi estufa, no tiene pilas ni cables pero igualmente te enchufa.. XD</div>

    </div>

    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-hoja-diaria-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Luceros</div>

      <div class="usuario-hoja-diaria-02">
        Tus ojos son dos luceros, tus mejillas dos manzanas, que linda ensalada de frutas hariamos con mi banana !!</div>

    </div>

    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-hoja-diaria-01">
        <ul>
          <li><a href="usuario.html"><img src="images/icon/user.png" width="16" height="16" border="0"> Perfil</a></li>
          <li><img src="images/icon/camera.png" width="16" height="16" border="0"> 0 Imágenes publicadas</li>
          <li><img src="images/icon/coment.png" width="18" height="17" border="0"> <a href="usuario-mis-comentarios.html">18 comentarios</a></li>
          <li><img src="images/icon/favicon.png" width="16" height="16" border="0"> <a href="#">Ir a Mi-Web de pepito</a></li>

        </ul>
      </div>



    </div>
  </div>

  <!--FIN usuario hoja diaria -->
</div>
<?php include_partial('global/column_right_panel', array('user' => $user))?>