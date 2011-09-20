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
<?php include_partial('global/column_right', $params_right)?>
<!-- FIN columna derecha -->