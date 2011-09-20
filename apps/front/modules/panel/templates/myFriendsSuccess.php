<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

<!--usuario-->
<!--usuario hoja diaria -->
<div id="link-color" class="usuario-libro-frases-pag-cont">
	<div class="usuario-titulo">
      <strong>Amigos de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username;?></a></strong></div>

	<div class="usuario-amigos-cont">
    
    	<div class="usuario-amigos-01"><img width="16" height="16" border="0" src="images/icon/control.png"> Mis amigos</div>
        
    	<div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/female.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="45" height="45" src="images/icon/usuario-consejero.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    
    <div class="usuario-amigos-cont">
    
    	<div class="usuario-amigos-01"><img width="16" height="16" border="0" src="images/icon/control.png"> Amigos de mis amigos</div>
        
    	<div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/female.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="45" height="45" src="images/icon/usuario-consejero.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
    
    <div class="usuario-amigos-cont">
      <div class="usuario-amigos-02"><img width="44" height="44" src="images/icon/male.jpg"> Jorjito</div>
        <div class="usuario-amigos-03"><img width="16" height="11" src="images/icon/flag/es.png"> Zaragoza (España) </div>
        <div class="usuario-amigos-03">0 frases</div>
        
    </div>
	   
    
    <div class="usuario-hoja-diaria-cont">
    
    <div class="usuario-hoja-diaria-01">
    	<ul>
    	<li><a href="usuario.html"><img width="16" height="16" border="0" src="images/icon/user.png"> Perfil</a></li>
        <li><img width="16" height="16" border="0" src="images/icon/camera.png"> 0 Imágenes publicadas</li>
        <li><img width="18" height="17" border="0" src="images/icon/coment.png"> <a href="usuario-mis-comentarios.html">18 comentarios</a></li>
        <li><img width="16" height="16" border="0" src="images/icon/favicon.png"> <a href="#">Ir a Mi-Web de pepito</a></li>
        
  	    </ul>
    	</div>
        
    	
        
    </div>
	
</div>

<!--FIN usuario hoja diaria --></div>

<?php include_partial('global/column_right_panel', array('user' => $user))?>