<?php get_header();  $left=true;?>
	<?php if(!is_page('Home')) { ?>
			<div class="title-con"><div class="grid-container"><h2>Search results for: <?php the_search_query(); ?></h2></div></div>
	<?php } ?>
	<div class="grid-container">
	<div class="sidebar"><?php get_sidebar(); ?></div>
	<div class="content-role">
	<?php if (have_posts()) { ?>		
		<?php while (have_posts()) { the_post(); ?>
			<article class="result">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
				<div class="readmore">
					<a href="<?php the_permalink(); ?>">Continue Reading &gt;&gt;</a>
				</div>
			</article>
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
