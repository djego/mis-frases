<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

  <!--usuario-->
  <!-- comentarios -->
  <div class="usuario-comentarios-pag-cont" id="link-color">
    <div class="usuario-titulo">
      <strong>Comentarios de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username;?></a></strong></div>

    <div class="usuario-comentarios-cont">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de frases</div>

      <div class="usuario-comentarios-02">
        No hay comentarios</div>

    </div>

    <div class="usuario-comentarios-cont">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de imágenes</div>

      <div class="usuario-comentarios-02">No hay comentarios</div>

    </div>

    <div class="usuario-comentarios-cont" id="link-color">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de perfil</div>

      <div class="usuario-comentarios-03-cont">

        <div class="usuario-comentarios-03">Un gustaso paisano, por tomarte el tiempo de pasar a saludarme, muchas gracias.</div>

        <div class="usuario-comentarios-04">Escrito por <a href="usuario.html">pepito</a> dia 04 May 18:08</div>
        <div class="usuario-comentarios-05">
          <ul>
            <li><a href="usuario.html">Ir al perfil</a></li><li><a href="#">Relatar violações das regras</a></li></ul>
        </div>
      </div>

      <div class="usuario-comentarios-03-cont">

        <div class="usuario-comentarios-03">Un gustaso paisano, por tomarte el tiempo de pasar a saludarme, muchas gracias.</div>

        <div class="usuario-comentarios-04">Escrito por <a href="usuario.html">pepito</a> dia 04 May 18:08</div>
        <div class="usuario-comentarios-05">
          <ul>
            <li><a href="usuario.html">Ir al perfil</a></li><li><a href="#">Relatar violações das regras</a></li></ul>
        </div>
      </div>

      <div class="usuario-comentarios-03-cont">

        <div class="usuario-comentarios-03">Un gustaso paisano, por tomarte el tiempo de pasar a saludarme, muchas gracias.</div>

        <div class="usuario-comentarios-04">Escrito por <a href="usuario.html">pepito</a> dia 04 May 18:08</div>
        <div class="usuario-comentarios-05">
          <ul>
            <li><a href="usuario.html">Ir al perfil</a></li><li><a href="#">Relatar violações das regras</a></li></ul>
        </div>
      </div>

      <div class="usuario-comentarios-03-cont">

        <div class="usuario-comentarios-03">Un gustaso paisano, por tomarte el tiempo de pasar a saludarme, muchas gracias.</div>

        <div class="usuario-comentarios-04">Escrito por <a href="usuario.html">pepito</a> dia 04 May 18:08</div>
        <div class="usuario-comentarios-05">
          <ul>
            <li><a href="usuario.html">Ir al perfil</a></li><li><a href="#">Relatar violações das regras</a></li></ul>
        </div>
      </div>




    </div>

    <div class="usuario-comentarios-cont">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de momentos</div>

      <div class="usuario-comentarios-02">No hay comentarios</div>

    </div>

    <div class="usuario-comentarios-cont">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de escritos</div>

      <div class="usuario-comentarios-02">No hay comentarios</div>

    </div>

    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de consejos</div>

      <div class="usuario-comentarios-02">No hay comentarios</div>

    </div>

    <div class="usuario-comentarios-cont">

      <div class="usuario-comentarios-01"><img src="images/icon/control.png" width="16" height="16" border="0"> Mis comentarios de nicks</div>

      <div class="usuario-comentarios-02">No hay comentarios</div>

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

  <!--FIN comentarios -->
</div>
<?php include_partial('global/column_right_panel', array('user' => $user))?>