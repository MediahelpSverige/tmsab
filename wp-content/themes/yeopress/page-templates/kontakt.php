<?php 
/*template name: kontakt*/

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

<section id="kontakt">

<div class="map-banner">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2064.9473729435067!2d16.521728116052255!3d58.83166298148748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465ed25693e0128f%3A0x75cd617c31b73745!2sTraktor+%26+Maskin+i+S%C3%B6rmland+AB!5e0!3m2!1sen!2sse!4v1467364170919" width="900" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="container">

<div class="col-md-8 col-sm-8">

<?php the_title('<h1></h1>');?>

<?php $args = array('post_type' => 'worker'); ?>


<?php $the_query = new WP_Query( $args ); 

if ( $the_query->have_posts() ) { ?>

<div class="worker-wrap">

<?php while ( $the_query->have_posts() ) { ?>


	<?php $the_query->the_post(); ?>



	
	<div class="worker">

	<h3><?php the_title();?></h3>

		<img src="<?php the_post_thumbnail_url();?>">

	</div>


	<?php }


	wp_reset_postdata();


	}else{

		//no posts

		} ?>
</div>

</div>

<div class="col-md-4 col-sm-4">

<h3>Fyll i formuläret nedan så återkommer vi inom kort</h3>




<?php echo do_shortcode('[contact-form-7 id="24" title="Contact form 1"]'); ?>

</div>

 </div>

			
</section>

</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php 

get_footer();

?>