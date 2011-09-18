<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

<!--usuario-->

<div id="link-color" class="usuario-cont">
	<div class="usuario-titulo">
      <strong>Pagina de <a href="usuario.html"><?php echo $user->username;?></a></strong></div>
	<!--caja usuario-->
	<div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-libro-frases.html"><img width="45" height="45" border="0" src="/images/icon/usuario-libro.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_book_ph',array('uniq' => $user->uniq))?>">Mi libro de frases </a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-hoja-dia.html"><img width="45" height="45" border="0" src="/images/icon/usuario-contacto.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-hoja-dia.html">Mi día de hoy</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-frases-enviadas.html"><img width="45" height="45" border="0" src="/images/icon/usuario-frases-enviadas.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-frases-enviadas.html">Frases enviadas</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mis-comentarios.html"><img width="45" height="45" border="0" src="/images/icon/usuario-comentarios.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mis-comentarios.html">Mis comentarios</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mis-imagenes.html"><img width="45" height="45" border="0" src="/images/icon/usuario-imagenes.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mis-imagenes.html">Mis imágenes</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-frases-favoritas.html"><img width="45" height="45" border="0" src="/images/icon/usuario-frases-favoritas.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-frases-favoritas.html">Mis frases favoritas</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mis-amigos.html"><img width="45" height="45" border="0" src="/images/icon/usuario-mis-amigos.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mis-amigos.html">Mis amigos</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mis-escritos.html"><img width="45" height="45" border="0" src="/images/icon/usuario-mis-escritos.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mis-escritos.html">Mis escritos</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mejores-momentos-mis-frases.html"><img width="45" height="45" border="0" src="/images/icon/usuario-mejores-momentos.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mejores-momentos-mis-frases.html">Mis mejores momentos en frases</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mejores-nicks.html"><img width="45" height="45" border="0" src="/images/icon/usuario-mejores-nicks.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mejores-nicks.html">Mis mejores nicks y los de mis amigos </a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-consejero.html"><img width="45" height="45" border="0" src="/images/icon/usuario-consejero.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-consejero.html">Los consejos de mi abuela</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="usuario-mensajes-privados.html"><img width="45" height="45" border="0" src="/images/icon/usuario-mail.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="usuario-mensajes-privados.html">Mis mensajes privados</a></div>
    </div>
    <!--FIN caja usuario-->
</div>

<!--FIN usuario--></div>




<div class="body-colum3">

  <!-- panel usuario -->
  <div class="usuarios-panel-datos-cont">
    <div class="usuarios-panel-datos-color-03">
      <div class="panel-usuarios-icon-tx">
        Sobre usuario</div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">

        <!--caja usuario-->
        <div class="usuarios-panel-datos-caja-cont">
          <div class="usuarios-panel-datos-caja-01">
            <a href="#"><img width="80" height="80" border="0" src="/images/icon/male.jpg"></a>
          </div>
          <div class="usuarios-panel-datos-caja-02">
            Nombre verdadero:<br>
            <?php echo $user->first_name.' '. $user->last_name;?><br><br>

            Fecha de nacimiento:<br>
            <?php echo Utils::getFormattedDate($user->birthday,'%d/%m/%Y' )?>
          </div>
        </div>
        <!-- FIN caja usuario-->

        <!--caja usuario-->
        <div class="usuarios-panel-datos-caja-cont">
          <div class="usuarios-panel-datos-caja-02">
            <ul>
              <li><strong>Sobre mi:</strong><br>
                Texto sin lugar a edicion
              </li><br>

              <li><strong>Porque me agrada mis-frases:</strong><br>
                Texto sin lugar a edicion
              </li><br>

              <li><strong>Qué tipo de frase te gusto mas:</strong><br>
                Texto sin lugar a edicion
              </li><br>

              <li><strong>Utilizo mis frases para:</strong><br>
                Texto sin lugar a edicion
              </li><br>

              <li><strong>Te agrada escribir poemas cartas cuentos:</strong><br>
                Texto sin lugar a edicion
              </li><br>
            </ul>
          </div>
        </div>
        <!-- FIN caja usuario-->

      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>
  <!-- FIN panel usuario -->



</div>

