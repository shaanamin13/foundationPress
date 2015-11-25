<?php
/*
Template Name: Front
*/
get_header(); ?>

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

					<h4 class="subheader"><b>In the land of Zenith, something strange is happening…</b></h4>
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

</div>
<div class="row">
	<?php get_template_part( 'parts/check-if-sidebar-exist' ); ?>
	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
