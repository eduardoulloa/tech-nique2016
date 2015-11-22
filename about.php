<?php
/*
Template Name: Our Technique
*/
?>
<!-- index -->
<!-- page -->

<?php get_header();  $left=false;?>


		<?php if(!is_page('Home')) { ?>
				<div class="title-con"><div class="grid-container"><h2><?php the_title(); ?></h2></div></div>
		<?php } ?>
		
		<div class="grid-container">
		
				
				
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

<div class="bottom-content about-bottombanner">
<ul style="list-style-type: none;">
	<li style="text-align: center;"><strong><span style="font-size: large;"><span style="color: #fff;">DEFINE</span></span></strong></li>
	<li style="text-align: center; padding-bottom:15px;"><strong><span style="font-size: large;"><span style="color: #d1e751;">Tech-Nique (tek-nek')</span></span></strong></li>
	<li style="text-align: center;"><strong>Skillfulness in the command of fundamentals deriving from practice and familiarity</strong></li>
	<li style="text-align: center;"><strong>A method or body of methods for accomplishing a desired end</strong></li>
	<li style="text-align: center;"><strong>A way of doing something by using special knowledge or skill</strong></li>
</ul>
</div>
<?php get_footer(); ?>

<!-- end index -->