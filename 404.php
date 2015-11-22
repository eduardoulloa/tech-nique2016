<?php get_header(); ?>

<div id="content" class="grid-container">

	<article class="page">
		<h1>Page not found</h1>
		<p>We're sorry, the page you were trying to find does not seem to exist.</p>
		<p>Perhaps searching will help</p>
		<?php get_search_form(); ?>
		<?php
			//if some posts exist, show a list of those.
			query_posts('posts_per_page=10');
			if (have_posts()) {
				echo "
					<h2>Recent Posts</h2>
					<ul>
				";
				while (have_posts()) {
					the_post();
		?>
			<li><a href="<?php the_permalink() ?>" title="Permalink for : <?php the_title(); ?>"><?php the_title(); ?></a>
		<?php
				}
				echo "</ul>";
			}
		?>
	</article>

</div>
<?php get_footer(); ?>