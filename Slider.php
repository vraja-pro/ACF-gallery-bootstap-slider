<?php 
$images = get_field('gallery');

if( $images ): 
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	$first = 'true';
	$i = '0';?>
		
		<div class="row">
		<div class="col-lg-12">
    	<div id="carouselAboutControls" class="carousel slide course-slider" data-ride="carousel">
			 <ol class="carousel-indicators">
				<?php foreach( $images as $image_id ): 
				 if($i == '0'){	 
				 ?>
				<li data-target="#carouselAboutControls" data-slide-to="0" class="active"></li>
				 <?php $i ++; }else{?>
				<li data-target="#carouselAboutControls" data-slide-to="<?php echo $i;?>"></li>
				
					<?php $i ++; } endforeach; ?>
			  </ol>
  <div class="carousel-inner">
        <?php foreach( $images as $image_id ):
	  
	  if($first == 'true'){?>
      
	   <div class="carousel-item active" style="background-image:url(<?php echo $image_id;?>)">
		  
		</div>
	  
        <?php $first = 'false';
			}else{?>
		  
		  <div class="carousel-item" style="background-image:url(<?php echo $image_id;?>)">
		        
		</div>
		  
	 <?php } endforeach; ?>
     </div>
  <a class="carousel-control-prev" href="#carouselAboutControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselAboutControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
	</div>
<?php endif; ?>
