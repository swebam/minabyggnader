<?php
/**
 * Template Name: CastleTemp
 *
 * @package WordPress
 */
 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
<?php listFolderFiles(); ?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
