<?php slot('subtitle', sprintf('Página de %s', $phrase->User->username)); ?>

<div class="body-colum2-centro2">

  <!--usuario-->
  <!--usuario hoja diaria -->
  <div id="link-color" class="usuario-libro-frases-pag-cont">
    <div class="usuario-titulo">
      <strong>Categoría:   Frases y Citas célebres</strong> </div>

    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="/images/icon/control.png"><?php echo $phrase->title ?></div>

      <div class="usuario-hoja-diaria-02">
        <p>&quot;<?php echo $phrase->content ?>&quot;</p>
        <p> Autor: <?php echo $phrase->author ?>&nbsp;</p>
        <div></div>
        <div></div>
        <hr><p></p>
        <?php if ($lst_comment): ?>
          <div class="even">
            <a name="72505">
              <table>
                <tbody>
                  <?php foreach ($lst_comment as $comment): ?>
                  <?php 
                    if($comment->sfGuardUser->gender == 'M'){
                       $img = 'male.jpg';
                  } else {
                    $img = 'female.jpg';
                  }
                    
                  ?>
                  <tr>
                    <td class="margenavatarcomen">
                      <div id="borde_fotos2">
                        <a href="<?php echo url_for('panel', array('uniq' => $comment->sfGuardUser->username)) ?>" title="smileandamor"><img alt="smileandamor" src="/images/icon/<?php echo $img ?>"></a>
                      </div>
                    </td>
                    <td>
                      <p><?php echo $comment->comment ?></p>
                      
                      <div class="detallescoment">
                        <div class="linknaranja">
                          Dijo
                          <a href="<?php echo url_for('panel', array('uniq' => $comment->sfGuardUser->username)) ?>"><?php echo $comment->sfGuardUser->username ?></a>
                          el día
                          <i>
                            19 Sep 17:48
                          </i>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </a>
          </div>
        <?php else: ?>
          <p>No hay comentarios para esta frase.&nbsp;<br/>
            <br/>
          </p>
        <?php endif; ?>


        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php if ($sf_user->isAuthenticated()): ?>
          <div id="publicar">
            <div>COMENTA ESTA FRASE:</div>
            <br>
            <form method="post" action="">             
              <div>
                <table>
                  <tbody>
                    <tr>
                      <td><div></div></td>
                      <td><?php if ($form->isCSRFProtected()) : ?>
                          <?php echo $form['_csrf_token']->render(); ?>
                        <?php endif; ?>
                        <?php if ($form['comment']->hasError()) : ?>
                          <?php echo $form['comment']->getError(); ?>
                        <?php endif; ?>  
                      </td>
                    </tr>
                    <tr>
                      <td><div>Comentario:&nbsp;*</div></td>
                      <td>
                        <?php echo $form['comment']->render(array('rows' => 6, 'cols' => 36)) ?>
                        <br>
                        <br></td>
                    </tr>
                  </tbody>
                </table>
                <p>* Campo obligatorio&nbsp;</p>
                <p>
                  <input type="submit" value="Comentar" id="button" name="button">
                  <br>
                </p>
              </div>
            </form>
          </div>

        <?php else: ?>
          <p> Debes de iniciar sesion para comentar <a href="<?php echo url_for('login'); ?>">Iniciar sesion</a> </p>
        <?php endif; ?>

      </div>

    </div>
    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-hoja-diaria-01">
        <ul>
          <li><a href="#"><img width="16" height="16" border="0" src="/images/icon/user.png"> Perfil</a></li>
          <li><img width="16" height="16" border="0" src="/images/icon/camera.png"> 0 Imágenes publicadas</li>
          <li><img width="18" height="17" border="0" src="/images/icon/coment.png"> <a href="usuario-mis-comentarios.html">0 comentarios</a></li>

        </ul>
      </div>



    </div>
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
              <li><img width="16" height="16" border="0" src="/images/icon/comment.gif"> <a href="usuario-leer-comentar-frase.html">Añadir a mis frases favoritas&nbsp;</a></li>
              <li><img width="16" height="16" border="0" src="/images/icon/arrow-transition.png"> <a href="usuario-enviar-amigo.html">Enviar a un amigo</a></li>
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



</div>