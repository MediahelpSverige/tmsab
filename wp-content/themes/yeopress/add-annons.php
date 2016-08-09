<?php 
/*

template name: ny annons
*/

get_header();


?>

<div class="page-container">

<div class="container">
	

<div class="row">
	<div class="col-md-12 col-sm-12 ">

	<div class="swiper-wrapper">
		<div class="swiper-container">
			<div class="swiper-slider"></div>
			<div class="swiper-slider"></div>
			<div class="swiper-slider"></div>
		</div>
	</div>
	
		<?php get_template_part('loop', 'newAdd'); ?>

	</div>

	</div>



</div>

</div>



<?php 

get_footer();

?>