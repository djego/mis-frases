<?php slot('subtitle', sprintf('Página de %s', $user->username)); ?>

<div class="body-colum2-centro2">

<!--usuario-->
<!--usuario hoja diaria -->
<div id="link-color" class="usuario-libro-frases-pag-cont">
	<div class="usuario-titulo">
      <strong>Frases favoritas de <a href="<?php echo url_for('panel', array('uniq' => $user->username)); ?>"><?php echo $user->username;?></a></strong></div>

	<div class="usuario-hoja-diaria-cont">
    
    	<div class="usuario-hoja-diaria-01"><img width="16" height="16" border="0" src="images/icon/control.png"> Luceros</div>
        
    	<div class="usuario-hoja-diaria-02">
        Tus ojos son dos luceros, tus mejillas dos manzanas que linda ensalada de fruta hariamos con mi banana !!</div>
        
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