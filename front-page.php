<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bigvideo.css">

 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/video.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bigvideo.js"></script>
  


<div id="sec1">
		<div class="grid-container">

			<div class="search-bar">
				
				<div id="find-jobs">
					<p>Find a Job</p>					
			        <div class="search-form-left">
					<?php if ( ! dynamic_sidebar('job-search') ) : ?><?php endif; ?>
					</div>          
				</div>

				<div id="jobs-cat">
					<p>Jobs by category</p>          
					<div class="search-form"> 
						<div class="search-box" onClick="ShowJcategory();"><font color="#999999">Select a Job Category</font></div>
						<?php if ( ! dynamic_sidebar('jobcategory-select') ) : ?><?php endif; ?>
						<img src="<?php bloginfo('template_directory'); ?>/img/search-icon.png" alt="Search" onClick="ShowJcategory();">
					</div>          
				</div>

			</div>
		</div><!-- end grid-container1 -->

		<div class="grid-container"> 
			<div id="sec1-bottom">
				<h1>Our <span>Tech-nique</span> is our difference</h1>
				<?php if ( !is_user_logged_in() ) { ?>
				<!--<h7><a href="<?php bloginfo('url'); ?>/resumes/register/">Sign Up Now</a></h7>-->
				<?php } ?>
			</div>
		</div><!-- end grid-container1 -->
</div>
<?php $ejobs = wpjb_find_jobs(array(
            "filter" => "active",
            "sort_order" => "t1.job_created_at DESC, t1.id DESC",
            "page" => 1,
            "count" => 5
        )); 
	    if(!empty($ejobs->job)){
			
			?>
<div  id="sec2">
		<div class="grid-container">

			<div class="recent-jobs">

			   <div class="top">

			   		<h5 class="left">Recently Posted</h5>

			   		<h5 class="right"><a href="<?php bloginfo('url'); ?>/jobs/">See All<img src="<?php bloginfo('template_directory'); ?>/img/arrow.png" alt="Search"></a></h5>
			   	
			   </div>
		
			
			<?php foreach($ejobs->job as $job){?>
			   <div id="job-listings">
			   		<ul id="recent-listing">
			   			<li>
			   				<h4><a href="<?php echo $job->url(); ?>"><?php echo substr($job->job_title,0,40); ?></a></h4>		
							<?php if(trim($job->meta->job_shortdescription->value()) != ""){ ?>  												
							<p style="font-size:12px; line-height:16px;"><?php echo substr($job->meta->job_shortdescription->value(),0,60)."..."; ?></p>
							<?php } ?>
			   				<p style="bottom:35px; position:absolute;line-height:16px;"><?php esc_html_e($job->locationToString()); ?></br>
							<i style="font-size:11px; color:#CCCC99"><?php if($job->isNew()): ?><span class="wpjb-bulb"><?php _e("new", "wpjobboard") ?></span><?php endif; ?>
							<?php echo wpjb_date_display("M, d", $job->job_created_at, true); ?>
							<?php if(isset($job->getTag()->type[0])): ?>
							<span class="wpjb-sub" style="color:#<?php echo $job->getTag()->type[0]->meta->color ?>">
							<?php esc_html_e($job->getTag()->type[0]->title) ?>
							</span>
							<?php endif; ?></i>
							</p>
			   				<a href="<?php echo $job->url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/arrow-2.png" alt="View"></a>
			   			</li>			   			
			   		</ul>
			   	
			   </div>
<?php
}
?>
				
			</div>

		</div><!-- end grid-container2 -->
</div>
<?php

		}
		?>
<div id="sec3">
		<div class="grid-container">

			<h6>Recent News: <a href="<?php bloginfo('url') ?>/category/news">See All</a></h6>
			
			

			<div class="sec-wrap">

				<div class="news">

				<?php echo do_shortcode('[display-posts category="news" posts_per_page="2" include_date="true"  include_excerpt="true"]') ?>
				
				

				</div>

				<div id="tweets">
						<?php get_sidebar(); ?>
				</div>

			</div>

		</div><!-- end grid-container3 -->
</div>
<script type="text/javascript">
function ShowJcategory(){
	$('.jcategory-list').show();
}
$(document).ready(function()
{
	var mouse_is_inside = false;
    $('.jcategory-list').hover(function(){ 
        var mouse_is_inside=true; 
    }, function(){ 
        var mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) $('.jcategory-list').hide();
    });
});
</script>
<script type="text/javascript">
/**
 * video source: http://beachfrontprod.blogspot.com/2011/09/random-footage-clip-2.html
 */
$(function() {
  var BV = new $.BigVideo({useFlashForFirefox:false});
    
  BV.init();
   BV.show('<?php bloginfo("template_directory"); ?>/media/shutterstock_v2200717.mp4', {ambient: true});
});
</script>

<?php get_footer(); ?>
