<?php
/*
Template Name: Employer Portal
*/
?>
<!-- index -->
<!-- page -->

<?php get_header();  $left=true;?>


		<?php if(!is_page('Home')) { ?>
				<div class="title-con"><div class="grid-container"><h2><?php the_title(); ?></h2></div></div>
		<?php } ?>
		<div class="topbanner employer-banner"></div>
		<div class="below-content"></div>
		<div class="grid-container">
		
			<div class="left-content">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('employer-sidebar') ) : 
			endif; ?>			
			</div>
	
				
		<div class="right-content <?php if(!$left){ echo "full"; } ?>">
        <?php if (have_posts()) { ?>
			<?php while (have_posts()) { the_post(); ?>												
				
				<article <?php post_class() ?>>
				<?php the_content('Continue Reading &gt;&gt;'); ?>
				</article>
				
				<?php comments_template(); ?>
			<?php } ?>
			<nav class="pagination">
				<?php 
					if (function_exists("wp_pagenavi")) {
						wp_pagenavi();
					} else {
						posts_nav_link('|','Newer Posts','Older Posts');
					}
				?>
			</nav>
		<?php } else { ?>
			<article class="page">
				<h1>Nothing Found</h1>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<p><a href="<?php echo get_option("home"); ?>">Return to the homepage</a></p>
			</article>
		<?php } ?>
	</div></div>


<?php get_footer(); ?>

<!-- end index -->