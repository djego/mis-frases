<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

<!--usuario-->

<div id="usuario-libro-frases" class="usuario-libro-frases-pag-cont">
	<div class="usuario-titulo">
      <strong>Libro de frases  de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username;?></a></strong></div>
      
	<!--libro frases -->

	<div class="usuario-libro-frases-cont">
    
    	<div class="usuario-libro-frases-01">
        <img width="16" height="16" border="0" src="/images/icon/like-icon.png"> Mis frases mas valoradas </div>
        
    	<div class="usuario-libro-frases-02">
        Aun no ha publicado ninguna frase
        </div>
        
    </div>
    
    <div class="usuario-libro-frases-cont">
    
    	<div class="usuario-libro-frases-01">
        <img width="18" height="17" src="/images/icon/coment.png"> Mis frases mas comentadas </div>
        
    	<div class="usuario-libro-frases-02">
        Aun no ha publicado ninguna frase
        </div>
        
    </div>
    
    <div class="usuario-libro-frases-cont">
    
    	<div class="usuario-libro-frases-01">
        <img width="20" height="17" src="/images/icon/estad.png"> Mis frases mas visitadas </div>
        
    	<div class="usuario-libro-frases-02">
        Aun no ha publicado ninguna frase
        </div>
        
    </div>
    
    <div class="usuario-libro-frases-cont">
    
    	<div class="usuario-libro-frases-01">
        <img width="16" height="16" src="/images/icon/clock-frame.png"> Ultimas frases publicadas </div>
        
    	<div class="usuario-libro-frases-02">
        Aun no ha publicado ninguna frase
        </div>
        
    </div>
    
    <div class="usuario-libro-frases-cont">
    
    	<div class="usuario-libro-frases-01">
        <img width="16" height="16" src="/images/icon/heart.png"> Mis amigos</div>
        
    	<div class="usuario-libro-frases-02">
        
        <?php if($user_friends):?>
        <ul>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            <li><a href="#"><img width="44" height="44" src="/images/icon/male.jpg"></a></li>
            
        </ul>
         <?php else:?>
          Aun no tiene amigos
         <?php endif;?>
          
        
        </div>
        
    </div>
    
    <div class="usuario-libro-frases-cont">
    
    	<div class="usuario-libro-frases-01">
        <img width="17" height="17" src="/images/icon/star.png">Mis ultimas frases favoritas</div>
        
    	<div class="usuario-libro-frases-02">
        Aun no ha publicado ninguna frase
        </div>
        
    </div>
	<!--FIN libro frases-->
</div>

<!--FIN usuario-->

  <div class="login-tx2">
		Gracias por participar en la comunidad de frases mas divertida de Internet. 
	</div>
    
</div>

<?php include_partial('global/column_right_panel', array('user' => $user))?>