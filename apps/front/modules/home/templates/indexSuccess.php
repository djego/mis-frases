<?php slot('subtitle', sprintf('Ultimas frases publicadas')); ?>
<!-- columna 02 centro -->
<div class="body-colum2-centro2">

  <?php foreach ($lst_phrase as $phrase): ?>
    <div class="caja-frases-cont">
      <div class="caja-frases-01">
        <div class="caja-frases-titulo"><?php echo $phrase->title; ?></div>
        <div class="caja-frases-icon"><img src="<?php echo sfConfig::get('app_s_img') . 'cat/' . $phrase->Category->slug . '.png'; ?>" width="80" height="80" border="0" /></div>
        <div class="caja-frase">&quot;<?php echo (strlen($phrase->content) > 160) ? substr($phrase->content, 0, 160) . '...' : $phrase->content; ?>&quot;</div>

      </div>
      <div class="caja-frases-02">
        <div class="caja-frase-stat-01">
          Publicado por <a href="<?php echo url_for('panel', array('uniq' => $phrase->User->username)) ?>"><?php echo $phrase->User->username; ?></a> <?php echo Utils::getTimePublic($phrase->created_at) ?>
        </div>
        <div class="caja-frase-stat-02">
          Categoría: <a href="<?php echo url_for('category_list', array('slug' => $phrase->Category->slug)); ?>"><?php echo $phrase->Category->name; ?></a><br />
          Autor: <?php echo $phrase->author; ?>
        </div>
        <div class="caja-frase-stat-valoracion">
          <div>Valoración:</div>
          <div>

            <ul class='star-rating'>
              <li class="current-rating" id="current-rating"><!-- will show current rating --></li>
              <span id="ratelinks">
                <li><a href="javascript:void(0)" title="1 star out of 5" class="one-star">1</a></li>
                <li><a href="javascript:void(0)" title="2 stars out of 5" class="two-stars">2</a></li>
                <li><a href="javascript:void(0)" title="3 stars out of 5" class="three-stars">3</a></li>
                <li><a href="javascript:void(0)" title="4 stars out of 5" class="four-stars">4</a></li>
                <li><a href="javascript:void(0)" title="5 stars out of 5" class="five-stars">5</a></li>
              </span>
            </ul>



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
            <a href="<?php echo url_for('user_read_comment', array('id' => $phrase->id)) ?>">Leer y comentar la frase</a></div>
        </div>

        <div class="caja-frase-stat-leer-cont">
          <div class="caja-frase-stat-leer01">
            <img src="/images/icon/coment02.png" width="18" height="17" border="0" />
          </div>
          <div class="caja-frase-stat-leer02">
            <a href="<?php echo url_for('user_send_friend', array('id' => $phrase->id)) ?>">Enviar a un amigo</a></div>
        </div>

      </div>
    </div>
  <?php endforeach; ?>


</div>
<!-- FIN columna 02 centro -->

<?php include_partial('global/column_right', $params_right) ?>

<!-- FIN columna derecha -->