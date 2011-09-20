<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

<!--usuario-->
<!--usuario hoja diaria -->
<div id="link-color" class="usuario-libro-frases-pag-cont">
	<div class="usuario-titulo">
      <strong>Hoja diaria de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username;?></a></strong></div>

	<div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png"> Un deseo</div>
        
    	<div class="usuario-hoja-diaria-02">
        Dar lo mejor cada día</div>
        
    </div>
    
    <div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png"> Que estoy haciendo ahora</div>
        
    	<div class="usuario-hoja-diaria-02">
        Inspirandome para mi siguiente frase</div>
        
    </div>
    
    <div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png"> La frase que más me define</div>
        
    	<div class="usuario-hoja-diaria-02">
        Soy así de simple como me lees</div>
        
    </div>
    
    <div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png">Personas que mandan frases a mi hoja</div>
        
    	<div class="usuario-hoja-diaria-02">No se ha publicado ningun comentario</div>
        
    </div>
    
    <div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png"> Una frase que significa mucho para mi</div>
        
    	<div class="usuario-hoja-diaria-02">
        No se ha publicado ningun comentario</div>
        
    </div>
    
    <div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png"> un sms enviado a mi hoja</div>
        
    	<div class="usuario-hoja-diaria-02">
        No se ha publicado ningun comentario</div>
        
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
