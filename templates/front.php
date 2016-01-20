<?php
/*Template Name: Front
*/
get_header(); ?>

<!-- fb share buttons -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=463583370371382";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- Front page header components -->
<header id="front-hero" role="banner">

	<div class="row">
		<div class="medium-6 columns">
		</div>
		<div class="medium-6 columns">
			<div class="row">
				<a href="http://www.evocreo.com" title="EvoCreo"><img src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilmfinity/EvoCreoTitle.png></a></h1>
			</div>
			<div class="marketing">

				<div class="tagline">
					<?php  $featured_text= simple_fields_value("featured_text"); ?>
					<?php  $contact_text = simple_fields_value("contact_us_text"); ?>
					<?php  $contact_button = simple_fields_value("contact_button_text"); ?>

					<h4 class="subheader"><b><?php echo $featured_text; ?></b></h4>
					<a role="button" class="download large button show-for-small-up" href="http://evocreo.com/"><b>Learn More!</b></a>
					<div class="row">
						<a href="https://play.google.com/store/apps/details?id=ilmfinity.evocreo.main.android&hl=ens">	<img class="appStore"  src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilmfinity/android-app-on-google-play.jpg></a>
						<a href="https://itunes.apple.com/us/app/evocreo-a-monster-capture-rpg/id918997182?mt=8">	<img class="appStore" src=<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ilmfinity/available-appstore-small.png></a>

					</div>
				</div>
				<div id="watch" class="small-12 columns">
				</div>
			</div>
		</div>
	</div>
</header>

<div class="row">

	<div class="small-12 columns large-9 columns">

		<?php $my_query = "showposts=3"; $my_query = new WP_Query($my_query); ?>
		<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

			<article class="front-post" id="post-<?php the_ID(); ?>">
				<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				}
				?>
				<header>
					<h4 class="entry-title"><?php the_title(); ?></h4>
				</header>
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>

					<footer class="post-footer">
						<!-- <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
						<p><?php the_tags(); ?></p> -->
						<div class="post-meta">



                             <div><i class="fa fa-pencil"></i><span> <?php the_date(); ?></span></div>



                             <div><i class="fa fa-user"></i><span> <?php the_author(); ?> </span></div>



                             <div><i class="fa fa-file"></i><span class = "category-link"><?php the_category(', '); ?></span></div>



              </div>

					</footer>

			</article>

		<?php endwhile; // end of one post ?>
	<?php endif; //end of loop ?>

</div>
<!-- Sidebar -->

<?php get_template_part( 'parts/sidebar-right' ); ?>


</div>
<?php get_footer(); ?>
