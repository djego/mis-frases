<div class="body-colum2-centro2">

  <!--usuario-->
  <!--usuario hoja diaria -->
  <div id="link-color" class="usuario-libro-frases-pag-cont">
    <div class="usuario-titulo">
      <strong>Publicar una Frase</strong></div>
    <form action="<?php echo url_for('new_phrase');?>" method="post" name="form" id="form_publicar">
      <div class="myform2" id="publicar_frase">
        <table>
          <tbody>
            <tr>
              <td><div>Título (opcional):</div></td>
              <td><?php echo $form['title']->render(array('cols' => 50)) ?>
                <br>
                <br></td>
            </tr>
            <tr>
              <td colspan="2"><div><br>
                  Por qué me gusta esta frase (opcional):</div></td>
            </tr>
            <tr>
              <td></td>
              <td><textarea rows="3" name="frase[motivo_gusta]" id="frase_motivo_gusta" cols="45"></textarea>
                <br>
                <br></td>
            </tr>
            <tr>
              <td><div>Frase:&nbsp;*</div></td>
              <td><?php echo $form['content']->render(array('cols' => 45, 'rows' => 8)) ?>
                
                <br>
                <br></td>
            </tr>
            <tr>
              <td><div>Autor (opcional):</div></td>
              <td><?php echo $form['author']->render(array('cols' => 40)) ?>
                <br>
                <br></td>
            </tr>
            <tr>
              <td><div>Categoría:*</div></td>
              <td>
                <?php echo $form['category_id']->render(); ?>
                <br>
              </td>
            </tr>
          </tbody>
        </table>
        * Campo obligatorio&nbsp;<br>

        <h1>&nbsp;</h1>
        <div class="spacer"></div>
        <?php if ($form->isCSRFProtected()) : ?>
          <?php echo $form['_csrf_token']->render(); ?>
        <?php endif; ?>
      </div>
      <table>
        <tbody>
          <tr>
            <td>
              <div id="stylized">
                <input type="submit" value="Submit" id="button" name="button">
              </div></td>
            <td><br>
              Pinchar sólo una vez y esperar unos segundos&nbsp;<br>
              mientras se publica la frase.</td>
          </tr>
        </tbody>
      </table>

    </form>




  </div>

  <!--FIN usuario hoja diaria --></div>


<div class="body-colum3">

  <!-- panel usuario -->
  <div id="link-color" class="menu-comentar-frase-cont">
    <div class="menu-comentar-frase-color-03">
      <div class="menu-comentar-frase-tx">
        Sobre usuario</div>
    </div>
    <div class="menu-comentar-frase-caja-cont-01">
      <div class="menu-comentar-frase-caja-cont-02">

        <!--caja usuario-->
        <div class="menu-comentar-frase-caja-cont-03">
          <div class="menu-comentar-frase-caja-01"><a href="login.html"><img width="45" height="45" border="0" src="/images/icon/usuario-imagenes.jpg"></a></div>
          <div class="menu-comentar-frase-caja-02">
            <a href="login.html">Enviar una imagen para esta frase</a><br>
          </div>
        </div>

        <div class="menu-comentar-frase-caja-cont-03">
          <div class="menu-comentar-frase-caja-03">
            <a href="login.html"><img width="16" height="16" border="0" src="/images/icon/camera.png"> Incluir imagen para la frase</a><br>
          </div>
        </div>

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
              <li><img width="16" height="16" border="0" src="/images/icon/calendar.gif"> Publicado hace una hora</li>
              <li><img width="16" height="16" border="0" src="/images/icon/comment.gif"> <a href="usuario-leer-comentar-frase.html">Comentar frase</a></li>
              <li><img width="16" height="16" border="0" src="/images/icon/arrow-transition.png"> <a href="usuario-enviar-amigo.html">Enviar a un amigo</a></li>
              <li><img width="16" height="16" border="0" src="/images/icon/user.png"> <a href="usuario.html">Enviado por usuario</a></li>
              <li><img width="16" height="16" border="0" src="/images/icon/book--plus.png"> <a href="usuario-mas-frases.html">Más frases de usuario</a></li>
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

  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img width="20" height="17" src="/images/icon/estad.png">
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
        <img width="17" height="17" src="/images/icon/star.png">
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
        <img width="18" height="17" src="/images/icon/coment.png">
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