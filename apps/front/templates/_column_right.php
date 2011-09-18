<!-- columna 03 -->
<div class="body-colum3">

  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img src="/images/icon/estad.png" width="20" height="17" />
      </div>
      <div class="body-colum3-panel-icon-tx">
        Frases más visitadas del mes</div>
    </div>
    <div class="body-colum3-panel-02">
      <div class="body-colum3-panel-02-caja">
        <?php foreach($last_phrases as $phrase):?>
        <?php echo substr($phrase->content,0,15).'...'; ?><a href="">Ver completo</a><br/>
        <span><?php echo $phrase->User->username;?></span>&nbsp;&nbsp;<span><?php echo $phrase->created_at ?></span>
        <?php endforeach;?>
        
      </div>
    </div>
    <div class="body-colum3-panel-03"></div>
  </div>
  <!-- FIN panel derecha -->

  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img src="/images/icon/star.png" width="17" height="17" />
      </div>
      <div class="body-colum3-panel-icon-tx">
        Frases más votadas</div>
    </div>
    <div class="body-colum3-panel-02">
      <div class="body-colum3-panel-02-caja">
        <?php foreach($last_phrases as $phrase):?>
        <?php echo substr($phrase->content,0,15).'...'; ?><a href="">Ver completo</a><br/>
        <span><?php echo $phrase->User->username;?></span>&nbsp;&nbsp;<span><?php echo $phrase->created_at ?></span>
        <?php endforeach;?>
        
      </div>
    </div>
    <div class="body-colum3-panel-03"></div>
  </div>
  <!-- FIN panel derecha -->
  <!-- panel derecha -->
  <div class="body-colum3-panel-cont">
    <div class="body-colum3-panel-01">
      <div class="body-colum3-panel-icon">
        <img src="/images/icon/coment.png" width="18" height="17" />
      </div>
      <div class="body-colum3-panel-icon-tx">
        Últimos comentarios</div>
    </div>
    <div class="body-colum3-panel-02">
      <div class="body-colum3-panel-02-caja">No hay comentarios</div>
    </div>
    <div class="body-colum3-panel-03"></div>
  </div>
  <!-- FIN panel derecha -->



</div>