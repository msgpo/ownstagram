
        <div class="span9">
          <div class="hero-unit">
            <h1><?php echo ($VARS->get('s_title')=='' ? 'OwnStaGram-Stream' : $VARS->get('s_title')."-stream"); ?> </h1>
          </div>
          
          <div class="row-fluid">
          
          <?php $i=0;foreach($VARS->get('list') as $key => $img) {  ?>
            <div class="span3">
		    <h3><?php echo date("d.m.Y", strtotime($img->get('i_date'))); ?></h3>
		    <p><a href='index.php?action=detail&id=<?php echo $img->get('id');?>'><?php 
		    if($i<9) { ?><img src='index.php?action=image&img=<?php echo md5($img->get('i_date').$img->get('i_file')); ?>&w=250' title="<?php echo $img->get('i_title');?>" style="border:solid 1px silver;box-shadow:0 10px 18px -10px #888888;border-radius:3px;" border="0" height="250" width="250" /><?php  
		    } else { ?><img src="resources/ownstagram.jpg" class="lazy" imgsrc='index.php?action=image&img=<?php echo md5($img->get('i_date').$img->get('i_file')); ?>&w=250' title="<?php echo $img->get('i_title');?>" style="border:solid 1px silver;box-shadow:0 10px 18px -10px #888888;border-radius:3px;" border="0" height="250" width="250" /><?php
		    } ?></a></p>
		    <?php if((int)$img->get('views')>0) { ?>
			    <div style="float:left;font-size:8pt;">
				<?php echo (int)$img->get('views');?> view<?php if((int)$img->get('views')>1) echo "s";?>
			    </div>
		    <?php } ?>
		    <?php if((int)$img->get('comments')>0) { ?>
			    <div style="float:right;padding-right:15px;font-size:8pt;">
				<?php echo (int)$img->get('comments');?> comment<?php if((int)$img->get('comments')>1) echo "s";?>
			    </div>
		    <?php } ?>
            </div><!--/span-->
          	  <?php
          	  if($i++%4==3) {
          	  	  echo '</div><div class="row-fluid">';
          	  }
          	  ?>
          <?php } ?>
            

          </div><!--/row-->
        </div><!--/span-->
        
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">sorting</li>
              <li class="active"><a href="#">newest first</a></li>
              <!--
              <li><a href="#">oldest first</a></li>
              <li><a href="#">random</a></li>
              <li><a href="#">most comments first</a></li>
              -->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
        