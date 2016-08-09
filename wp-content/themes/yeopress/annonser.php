<?php 
/*

template name: annonser
*/

get_header();

?>

<div class="container">

<div class="page-container">


	

<div class="row">
	<div class="col-md-12 col-sm-12 ">


		<!--<div class="swiper-container">
			<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image:url('<?php bloginfo('template_url' );?>/images/banner1.jpg')">
				<div class="swiper-text">Sälj dina gamla kläder</div>
			</div>
			<div class="swiper-slide" style="background-image:url('<?php bloginfo('template_url' );?>/images/banner1.jpg')">
				<div class="swiper-text">Sälj dina gamla kläder</div>
			</div>
			<div class="swiper-slide" style="background-image:url('<?php bloginfo('template_url' );?>/images/banner1.jpg')">
				<div class="swiper-text">Sälj dina gamla kläder</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>-->
	
		<?php get_template_part('loop', 'adds'); ?>

		<div class="add-cat-nav">
			<nav><ul>
				<li><a>Kläder cat 1</a></li>
				<li><a>Kläder cat 2</a></li>
				<li><a>Kläder cat 3</a></li>
				<li><a>Kläder cat 4</a></li>
			</ul></nav>
			<div class="clearfix"></div>
		</div>

	</div>

	<section class="add-grid">

			<ul>
		<?php


		$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li>
		<?php endforeach; 
		wp_reset_postdata();?>

		</ul>

	<div class="grid">
		<div class="grid-item" style="background-image:url('<?php bloginfo('template_url' );?>/images/banner1.jpg')"></div>
		<div class="grid-item" style="background-image:url('<?php bloginfo('template_url' );?>/images/banner1.jpg')"></div>
		<div class="grid-item" style="background-image:url('<?php bloginfo('template_url' );?>/images/banner1.jpg')"></div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-6 col-xl-4">

			
		</div>
		<div class="col-sm-6 col-md-6 col-xl-4">
			
		</div>
		<div class="col-sm-6 col-md-6 col-xl-4">
			
		</div>
	</div>


	</section>

	</div>



</div>


</div>

<script type="text/javascript">




		 jQuery(function($) {
		 	$(document).ready(function(){


		 		$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});




		 			$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + 'fadeInUp').one(animationEnd, function() {
            $(this).removeClass('animated ' + 'fadeInUp');
        });
    }
});


	    //initialize swiper when document ready  
	//initialize swiper when document ready
	var mySwiper = new Swiper ('.swiper-container', {
	// Optional parameters
	loop: true,
	autoplay: 6000,
	pagination: '.swiper-pagination',
	paginationClickable: true,

    onSlideChangeStart: function(swiper) {
    	$('.swiper-text').css({

			display: "none",

		})
    },

	onSlideChangeEnd: function(swiper) {

		$('.swiper-text').css({

			display: "block",

		}),

		$('.swiper-text').animateCss('fadeInUp');
		

	}

	})

});

		 });



</script>



<?php 

get_footer();

?>