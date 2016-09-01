<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-wrapper">

		<section id="info-section">
					<div class="overlay-title">
				<h1><?php the_field('valkomstext');?></h1></div>

							<!--<h1 id="insta-title"><a href="https://www.instagram.com/traktorochmaskin/">@traktorochmaskin</a></h1>-->

					<div id="instafeed">

					</div>



					<!--<a href="#" class="black-btn">Se mer på instagram</a>-->
			


		</section>

		<section id="intro">
				<!--<div class="stripes"></div>-->
			<div class="container">


			<div class="row">
				<div class="col-md-12" id="full-text">
					<p>Traktor & Maskin i Sörmland AB är ett privatägt företag som verkar inom de gröna näringarna. Vi verkar i Sörmland och är återförsäljare för Massey Ferguson som är ett av de världsledande företagen inom lantbrukssektorn. Vi genomsyras av en äkta vilja att ge god service och se nöjda kunder. Långsiktiga relationer med våra kunder är viktigt för oss.</p>
				</div>
			</div>


								<div class="col-md-8">


			<div class="box-wrap">

				<h3 class="title-border">Kontakta en säljare idag!</h3>


				<?php //the_content(); ?>

				<?php $postargs = array('posts_per_page'=>'1', 'post_type' => 'worker', 'orderby' => 'rand')?>



				<?php $posts = get_posts($postargs); 


			//print_r($posts);

			foreach( $posts as $post ) :
				setup_postdata($post); ?>

			<div class="row">

			<div class="col-md-6 col-sm-6">

			<div class="worker">


			<img src="<?php the_post_thumbnail_url();?>">

			<h3><?php the_title();?></h3>
			<div class="phone"><i class="fa fa-phone"></i><span><?php the_field('telefon');?></span><div class="clearfix"></div></div>
			<div class="email"><i class="fa fa-envelope-o"></i><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email');?></a><div class="clearfix"></div></div>
</div>

			</div>

			<div class="col-md-6 col-sm-6">

			<h4>Fyll i formuläret nedan så återkommer vi så fort vi kan!</h4>

							<div class="email-form">
												<div class="form-row">

							<?php echo do_shortcode('[contact-form-7 id="227" title="säljare"]'); ?>
							</div>

				</div>
</div>
				</div>


		<?php 	endforeach;

		wp_reset_postdata()

?>





</div>
<div class="box-wrap">

		<section id="welcome-section" style="background-image:url('<?php bloginfo('template_url')?>/images/crew-wide.jpg')">


								<div class="container">


								<!--<h1>Välkommen</h1>-->

			<div class="row">

				<div class="col-md-9 col-sm-9 col-md-offset-3" id="text">
				<?php //the_content(); ?>
				</div>


			</div>

			</div>
		</section>
		</div>




				</div>

				<div class="col-md-4">
								<div class="fb-wrap box-wrap">

			<h3 class="title-border">Vi finns på Facebook</h3>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTraktor-Maskin-i-S%25C3%25B6rmland-AB-442543515902113%2F%3Ffref%3Dnf&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=911661125591162" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			<div class="box-wrap">


							<h3 class="title-border">Ta en rundtur på youtube!</h3>
				<iframe width="640" height="360" src="https://www.youtube.com/embed/WsDP93MyflE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

				</div>
				</div>

							<div class="row">
				<div class="col-md-12"  id="full-text">
					<p>Traktor & Maskin i Sörmland verkar i hela Sörmland med försäljning och service av traktorer, tröskor och jordbruksrelaterade produkter. Vårt mål är att bli ett framstående maskinbolag i Sörmland och Er partner genom god service, spetskompetens och ny teknik.</p>

					<strong>Har du några frågor och funderingar slå oss en signal på 0155-714 40 – Välkomna!</strong>
				</div>
			</div>


			</div>
		</section>
		<!--<section id="youtube">
			<iframe width="1900" height="1069" src="https://www.youtube.com/embed/WsDP93MyflE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
		</section>

		<div class="clearfix"></div>
	</div>

	<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script type="text/javascript">
/*
jQuery(window).load(function ($) {

	console.log($(window).height());
	//$('.banner').height($(window).height() -123);


});
*/

console.log('footer');
var feed = new Instafeed({
        get: 'user',
        userId: 3127068056,

        accessToken: '3127068056.1677ed0.6dccf6aae5074bb08e9aef60f8227ca7',
        template: '<div class="insta grid-item"><a href="{{link}}"><div class="text"><small>{{caption}}</small></div><img src="{{image}}" /></a></div>',
        limit: 18,
        resolution: 'standard_resolution',

         after: function() {
         	console.log('done');
         	jQuery('#instafeed').append('<div class="clearfix"></div>');
         }
    });
    feed.run();
</script>

<?php get_footer();?>