<?php
/*
Template Name: Contact
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
	</div>

	<div class="right-content">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contactmap-sidebar') ) :
		endif; ?>
	</div>

	</div>
<div class="bottom-content">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:406px;width:100%;'><div id='gmap_canvas' style='height:406px;width:1920px;'></div>
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
 <a href='http://www.maps-generator.com'>At www.maps-generator.com</a> <script type='text/javascript' src='http://embedmaps.com/google-maps-authorization/script.js?id=d3a94c2049a992283bc68049ecd6f094e28962c4'></script><script type='text/javascript'> function init_map(){
var myOptions = {
zoom:12,center:new google.maps.LatLng(40.7592284,-73.97022340000001),
mapTypeId: google.maps.MapTypeId.ROADMAP};
map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.7592284,-73.97022340000001)});
infowindow = new google.maps.InfoWindow({
content:'<strong></strong><br>'+
'641 Lexington Ave, New York, 10022<br>'+
'10022 <br>'
});
google.maps.event.addListener(marker, 'click', function(){
infowindow.open(map,marker);
});
infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);
</script>
</div>

<?php get_footer(); ?>

<!-- end index -->