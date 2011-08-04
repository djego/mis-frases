<!-- columna 02 centro -->
<div class="body-colum2-centro2">

  <?php foreach ($lst_phrase as $phrase): ?>
    <div class="caja-frases-cont">
      <div class="caja-frases-01">
        <div class="caja-frases-titulo"><?php echo $phrase->title; ?></div>
        <div class="caja-frases-icon"><img src="/images/icon/calico-poeta.png" width="80" height="80" border="0" /></div>
        <div class="caja-frase">&quot;<?php echo (strlen($phrase->content) > 160) ? substr($phrase->content, 0, 160) . '...' : $phrase->content; ?>&quot;</div>

      </div>
      <div class="caja-frases-02">
        <div class="caja-frase-stat-01">
          Publicado por <a href="usuario.html"><?php echo $phrase->User->username; ?></a> hace 1 hora
        </div>
        <div class="caja-frase-stat-02">
          Categoría: <a href="categoria-amor.html"><?php echo $phrase->Category->name; ?></a><br />
          Autor: usuario
        </div>
        <div class="caja-frase-stat-valoracion">
          <div>Valoración:</div>
          <div>
            <img src="/images/icon/star-stat01.png" width="29" height="27" border="0" />
            <img src="/images/icon/star-stat01.png" width="29" height="27" border="0" />
            <img src="/images/icon/star-stat01.png" width="29" height="27" border="0" />
            <img src="/images/icon/star-stat02.png" width="29" height="27" border="0" />
            <img src="/images/icon/star-stat02.png" width="29" height="27" border="0" />
          </div>
        </div>

        <div class="caja-frase-stat-coment-cont">
          <div class="caja-frase-stat-coment01">
            <img src="/images/icon/coment.png" width="18" height="17" border="0" />
          </div>
          <div class="caja-frase-stat-coment02">
              	0 comentarios
          </div>

          <div class="caja-frase-stat-visit-cont">
            <div class="caja-frase-stat-visit01">
              <img src="/images/icon/estad.png" width="20" height="17" border="0" />
            </div>
            <div class="caja-frase-stat-visit02">
              	04 visitas
            </div>
          </div>
        </div>

        <div class="caja-frase-stat-leer-cont">
          <div class="caja-frase-stat-leer01">
            <img src="/images/icon/coment02.png" width="18" height="17" border="0" />
          </div>
          <div class="caja-frase-stat-leer02">
            <a href="usuario-leer-comentar-frase.html">Leer y comentar la frase</a></div>
        </div>

        <div class="caja-frase-stat-leer-cont">
          <div class="caja-frase-stat-leer01">
            <img src="/images/icon/coment02.png" width="18" height="17" border="0" />
          </div>
          <div class="caja-frase-stat-leer02">
            <a href="usuario-enviar-amigo.html">Enviar a un amigo</a></div>
        </div>

      </div>
    </div>
  <?php endforeach; ?>


</div>
<!-- FIN columna 02 centro -->

<!-- columna 03 -->
<div class="body-colum3">

  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img src="images/icon/estad.png" width="20" height="17" />
      </div>
      <div class="body-colum3-panel-icon-tx">
        Frases más visitadas del mes</div>
    </div>
    <div class="body-colum3-panel-02">
      <div class="body-colum3-panel-02-caja">abc</div>
    </div>
    <div class="body-colum3-panel-03"></div>
  </div>
  <!-- FIN panel derecha -->

  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img src="images/icon/star.png" width="17" height="17" />
      </div>
      <div class="body-colum3-panel-icon-tx">
        Frases más votadas</div>
    </div>
    <div class="body-colum3-panel-02">
      <div class="body-colum3-panel-02-caja">abc</div>
    </div>
    <div class="body-colum3-panel-03"></div>
  </div>
  <!-- FIN panel derecha -->
  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img src="images/icon/coment.png" width="18" height="17" />
      </div>
      <div class="body-colum3-panel-icon-tx">
        Últimos comentarios</div>
    </div>
    <div class="body-colum3-panel-02">
      <div class="body-colum3-panel-02-caja">abc</div>
    </div>
    <div class="body-colum3-panel-03"></div>
  </div>
  <!-- FIN panel derecha -->



</div>

<!-- FIN columna derecha -->