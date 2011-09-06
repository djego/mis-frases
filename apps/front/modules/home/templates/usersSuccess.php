<?php slot('subtitle', sprintf('Usuarios de mis-frases')); ?>
<div id="link-color" class="panel-usuarios-pag-cont">
  <!-- panel derecha -->
  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-01">

      <div class="panel-usuarios-icon-tx">
        Usuários mas activos
      </div>

    </div>
    <div class="panel-usuarios-02">

      <?php foreach ($lst_user_active as $user): ?>
        <?php
        if ($user['gender'] == 'M') {
          $img = 'male.jpg';
        } else {
          $img = 'female.jpg';
        }
        ?>
        <!--caja usuario-->
        <div class="panel-usuarios-02-caja-cont">
          <div class="panel-usuarios-02-caja-01">
            <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
          </div>
          <div class="panel-usuarios-02-caja-02">
            <a href="#"><?php echo $user['username']; ?></a></div>
        </div>
      <?php endforeach; ?>
      <!-- FIN caja usuario-->

    </div>
    <div class="panel-usuarios-03"></div>
  </div>

  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-02">
      <div class="panel-usuarios-icon-tx">
        Últimos usuários registrados</div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">
        <!--caja usuario-->
        <?php foreach ($lst_user_active as $user): ?>
          <?php
          if ($user['gender'] == 'M') {
            $img = 'male.jpg';
          } else {
            $img = 'female.jpg';
          }
          ?>
          <!--caja usuario-->
          <div class="panel-usuarios-02-caja-cont">
            <div class="panel-usuarios-02-caja-01">
              <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
            </div>
            <div class="panel-usuarios-02-caja-02">
              <a href="#"><?php echo $user['username']; ?></a></div>
          </div>
        <?php endforeach; ?>
        <!-- FIN caja usuario-->
      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>

  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-03">
      <div class="panel-usuarios-icon-tx">
        Usuários con mas frases </div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">

        <?php foreach ($lst_user_active as $user): ?>
          <?php
          if ($user['gender'] == 'M') {
            $img = 'male.jpg';
          } else {
            $img = 'female.jpg';
          }
          ?>
          <!--caja usuario-->
          <div class="panel-usuarios-02-caja-cont">
            <div class="panel-usuarios-02-caja-01">
              <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
            </div>
            <div class="panel-usuarios-02-caja-02">
              <a href="#"><?php echo $user['username']; ?></a></div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>

  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-04">
      <div class="panel-usuarios-icon-tx">
        Usuários con mas amigos </div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">

        <?php foreach ($lst_user_active as $user): ?>
          <?php
          if ($user['gender'] == 'M') {
            $img = 'male.jpg';
          } else {
            $img = 'female.jpg';
          }
          ?>
          <!--caja usuario-->
          <div class="panel-usuarios-02-caja-cont">
            <div class="panel-usuarios-02-caja-01">
              <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
            </div>
            <div class="panel-usuarios-02-caja-02">
              <a href="#"><?php echo $user['username']; ?></a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>

  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-05">
      <div class="panel-usuarios-icon-tx">
        Usuários con mas comentários </div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">

        <?php foreach ($lst_user_active as $user): ?>
          <?php
          if ($user['gender'] == 'M') {
            $img = 'male.jpg';
          } else {
            $img = 'female.jpg';
          }
          ?>
          <!--caja usuario-->
          <div class="panel-usuarios-02-caja-cont">
            <div class="panel-usuarios-02-caja-01">
              <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
            </div>
            <div class="panel-usuarios-02-caja-02">
              <a href="#"><?php echo $user['username']; ?></a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>

  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-06">
      <div class="panel-usuarios-icon-tx">
        Usuários con frases mas visitadas </div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">

        <?php foreach ($lst_user_active as $user): ?>
          <?php
          if ($user['gender'] == 'M') {
            $img = 'male.jpg';
          } else {
            $img = 'female.jpg';
          }
          ?>
          <!--caja usuario-->
          <div class="panel-usuarios-02-caja-cont">
            <div class="panel-usuarios-02-caja-01">
              <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
            </div>
            <div class="panel-usuarios-02-caja-02">
              <a href="#"><?php echo $user['username']; ?></a></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>

  <div class="panel-usuarios-cont">
    <div class="panel-usuarios-color-07">
      <div class="panel-usuarios-icon-tx">
        Usuários con frases mas valoradas </div>
    </div>
    <div class="panel-usuarios-02">
      <div class="panel-usuarios-02-caja">

        <?php foreach ($lst_user_active as $user): ?>
          <?php
          if ($user['gender'] == 'M') {
            $img = 'male.jpg';
          } else {
            $img = 'female.jpg';
          }
          ?>
          <!--caja usuario-->
          <div class="panel-usuarios-02-caja-cont">
            <div class="panel-usuarios-02-caja-01">
              <a href="#"><img width="44" height="44" border="0" src="/images/icon/<?php echo $img; ?>" /></a>
            </div>
            <div class="panel-usuarios-02-caja-02">
              <a href="#"><?php echo $user['username']; ?></a></div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
    <div class="panel-usuarios-03"></div>
  </div>


  <!-- FIN panel derecha -->
  <div class="novedades-caja4">
		Gracias por participar en la comunidad de frases mas divertida de Internet. 
  </div>

</div>