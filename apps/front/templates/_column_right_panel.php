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
            <?php echo $user->first_name . ' ' . $user->last_name; ?><br><br>

            Fecha de nacimiento:<br>
            <?php echo Utils::getFormattedDate($user->birthday, '%d/%m/%Y') ?>
          </div>
        </div>
        <!-- FIN caja usuario-->

        <!-- caja menu2 usuario -->

        <ul id="usuarios-menu2">
          <li>
            <a href="<?php echo url_for('user_book_ph',array('uniq' => $user->username))?>">
              <img width="45" height="45" border="0" src="/images/icon/usuario-libro.jpg" />Mi libro de frases
            </a>
          </li>
          <li>
            <a href="<?php echo url_for('user_my_today',array('uniq' => $user->username))?>">
              <img width="45" height="45" border="0" src="/images/icon/usuario-contacto.jpg"/> Mi dia de hoy
            </a>
          </li>
          <li>
            <a href="<?php echo url_for('user_phrase_send',array('uniq' => $user->username))?>">
              <img width="45" height="45" border="0" src="/images/icon/usuario-frases-enviadas.jpg"/> Frases enviadas
            </a>
          </li>
          <li>
            <a href="<?php echo url_for('user_my_comments',array('uniq' => $user->username))?>">
              <img width="45" height="45" border="0" src="/images/icon/usuario-comentarios.jpg"/> Mis comentarios
            </a>
          </li>
          <li>
            <a href="<?php echo url_for('user_phrase_fav',array('uniq' => $user->username))?>">
              <img width="45" height="45" border="0" src="/images/icon/usuario-frases-favoritas.jpg"/> Mis frases favoritas
            </a>
          </li>
          <li>
            <a href="<?php echo url_for('user_my_friends',array('uniq' => $user->username))?>">
              <img width="45" height="45" border="0" src="/images/icon/usuario-mis-amigos.jpg"/> Mis amigos
            </a>
          </li>

        </ul>
        <!-- FIN caja menu2 usuario -->

      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>
  <!-- FIN panel usuario -->



</div>