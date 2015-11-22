<?php
/*
Template Name: Sitemap.php
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) { ?>
		<?php while (have_posts()) { the_post(); ?>
				<article class="page">
					<?php the_content(''); ?>
					<ul id="sitemap">
						<?php
							$args = array(
								"title_li" => "",
							);
							wp_list_pages($args);
						?>
					</ul>
				</article>
		<?php } ?>
	<?php } ?>
<?php get_footer(); ?>