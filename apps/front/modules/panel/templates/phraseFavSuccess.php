<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

  <!--usuario-->
  <!--usuario hoja diaria -->
  <div id="link-color" class="usuario-libro-frases-pag-cont">
    <div class="usuario-titulo">
      <strong>Frases favoritas de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username; ?></a></strong></div>

    <?php if(count($lst_phrase)):?>
    <?php foreach($lst_phrase as $phrase):?>
    <div class="usuario-hoja-diaria-cont">

      <div class="usuario-hoja-diaria-01"><img src="/images/icon/control.png" width="16" height="16" border="0"> <?php echo ($phrase->mfPhrase->title)?$phrase->mfPhrase->title:'(Sin titulo)'?></div>

      <div class="usuario-hoja-diaria-02"><?php echo $phrase->mfPhrase->content; ?></div>

      <div class="usuario-hoja-diaria-01">
        <ul>
          <li><a href="<?php echo url_for('panel',array('uniq' => $user->username))?>"><img src="/images/icon/user.png" width="16" height="16" border="0"> Perfil de <?php echo $user->username; ?></a></li>
          <li><img src="/images/icon/coment.png" width="18" height="17" border="0"> <a href="usuario-mis-comentarios.html">0 comentarios</a></li>

        </ul>
      </div>

    </div>
    <?php endforeach;?>
    <?php else:?>
    <div class="usuerio-hoja-diaria-cont">
      No tiene mensajes enviados
    </div>
    <?php endif;?>








  </div>

  <!--FIN usuario hoja diaria --></div>

<?php
include_partial('global/column_right_panel', array('user' => $user))?>