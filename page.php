<!-- page -->

<?php get_header();  $left=false;?>


		<?php if(!is_page('Home')) { ?>
				<div class="title-con"><div class="grid-container"><h2><?php the_title(); ?></h2></div></div>
		<?php } ?>
		
		<div class="grid-container">
		
		<?php $emp = array('/jobs/employer/panel/', '/jobs/employer/', '/jobs/add/','/jobs/employer/edit/','/jobs/employer/login/','/jobs/employer/register/','/jobs/employer/password/','/jobs/employer/panel-expired/'); $path = str_replace(site_url(),"",$_SERVER['SCRIPT_URI']); if(is_wpjb() && !in_array($path,$emp)){  ?>
			<div class="left-content">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('job-sidebar') ) : 
			endif; ?>			
			</div>
		<?php $left=true; } ?>
	
				
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