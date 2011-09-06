 <?php slot('subtitle', sprintf('Categoria de frases')); ?>
<!-- columna 02 centro -->

<div class="body-colum2-centro2">

<div id="ul-link-color" class="login-tx">
  <ul>
    <?php foreach ($lst_category as $category): ?>
    <li><a href="<?php echo url_for('category_list',array('slug' =>$category->slug))?>"><?php echo $category->name; ?></a></li> 
    <?php endforeach; ?>     
  </ul>
</div>
<div class="login-tx2">
		Gracias por participar en la comunidad de frases mas divertida de Internet. 
	</div>

</div>
<!-- FIN columna 02 centro -->

<!-- columna 03 -->
<div class="body-colum3">

	<!-- panel derecha -->
	<div class="body-colum3-panel-cont">
    	<div class="body-colum3-panel-01">
        	<div class="body-colum3-panel-icon">
            <img src="images/icon/estad.png" width="20" height="17" />
            </div>
          <div class="body-colum3-panel-icon-tx">
            Frases más visitadas del mes</div>
      </div>
    	<div class="body-colum3-panel-02">
        	<div class="body-colum3-panel-02-caja">abc</div>
    	</div>
    	<div class="body-colum3-panel-03"></div>
    </div>
    <!-- FIN panel derecha -->
    
    <!-- panel derecha -->
	<div class="body-colum3-panel-cont">
    	<div class="body-colum3-panel-01">
        	<div class="body-colum3-panel-icon">
            <img src="images/icon/star.png" width="17" height="17" />
            </div>
          <div class="body-colum3-panel-icon-tx">
          Frases más votadas</div>
      </div>
    	<div class="body-colum3-panel-02">
        	<div class="body-colum3-panel-02-caja">abc</div>
    	</div>
    	<div class="body-colum3-panel-03"></div>
    </div>
    <!-- FIN panel derecha -->
    <!-- panel derecha -->
	<div class="body-colum3-panel-cont">
    	<div class="body-colum3-panel-01">
        	<div class="body-colum3-panel-icon">
            <img src="images/icon/coment.png" width="18" height="17" />
            </div>
          <div class="body-colum3-panel-icon-tx">
          Últimos comentarios</div>
      </div>
    	<div class="body-colum3-panel-02">
        	<div class="body-colum3-panel-02-caja">abc</div>
    	</div>
    	<div class="body-colum3-panel-03"></div>
    </div>
    <!-- FIN panel derecha -->
    
  

</div>

<!-- FIN columna derecha -->