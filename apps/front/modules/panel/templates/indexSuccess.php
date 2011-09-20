<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

<!--usuario-->

<div id="link-color" class="usuario-cont">
	<div class="usuario-titulo">
          <strong>Pagina de <a href="<?php echo $sf_request->getUri(); ?>"><?php echo $user->username;?></a></strong></div>
	<!--caja usuario-->
	<div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="<?php echo url_for('user_book_ph',array('uniq' => $user->username))?>"><img width="45" height="45" border="0" src="/images/icon/usuario-libro.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_book_ph',array('uniq' => $user->username))?>">Mi libro de frases </a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="<?php echo url_for('user_my_today',array('uniq' => $user->username))?>"><img width="45" height="45" border="0" src="/images/icon/usuario-contacto.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_my_today',array('uniq' => $user->username))?>">Mi día de hoy</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="<?php echo url_for('user_phrase_send',array('uniq' => $user->username))?>"><img width="45" height="45" border="0" src="/images/icon/usuario-frases-enviadas.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_phrase_send',array('uniq' => $user->username))?>">Frases enviadas</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="<?php echo url_for('user_my_comments',array('uniq' => $user->username))?>"><img width="45" height="45" border="0" src="/images/icon/usuario-comentarios.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_my_comments',array('uniq' => $user->username))?>">Mis comentarios</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="<?php echo url_for('user_phrase_fav',array('uniq' => $user->username))?>"><img width="45" height="45" border="0" src="/images/icon/usuario-frases-favoritas.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_phrase_fav',array('uniq' => $user->username))?>">Mis frases favoritas</a></div>
    </div>
    
    <div class="usuario-caja01-cont">
    	<div class="usuario-caja01-img"><a href="<?php echo url_for('user_my_friends',array('uniq' => $user->username))?>"><img width="45" height="45" border="0" src="/images/icon/usuario-mis-amigos.jpg"></a></div>
    	<div class="usuario-caja01-tx">
        <a href="<?php echo url_for('user_my_friends',array('uniq' => $user->username))?>">Mis amigos</a></div>
    </div>

    <!--FIN caja usuario-->
</div>

<!--FIN usuario--></div>
<?php include_partial('global/column_right_panel', array('user' => $user))?>