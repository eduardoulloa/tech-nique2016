		</div><!-- end grid-container -->

	</div><!-- end main-content -->

	<footer><!--
<div  id="foot1">
      <div class="grid-container">
  
        <div class="left">
  
          <h6>Get News: <span>Subscribe to our newsletter</span></h6>
        </div>
  
        <div class="right">
          	<div class="sub-left">
              <img src="<?php bloginfo('template_directory'); ?>/img/email.png" alt="Email">
              <h6>Email Address:</h6>
            </div>
            <script type="text/javascript">
            //<![CDATA[
            if (typeof newsletter_check !== "function") {
            window.newsletter_check = function (f) {
                var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                if (!re.test(f.elements["ne"].value)) {
                    alert("The email is not correct");
                    return false;
                }
                if (f.elements["ny"] && !f.elements["ny"].checked) {
                    alert("You must accept the privacy statement");
                    return false;
                }
                return true;
            }
            }
            //]]>
            </script>
            
            <div class="newsletter newsletter-subscription">
            <form method="post" action="http://fire.h50.us/~techniqu/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
            
            <table cellspacing="0" cellpadding="3" border="0">
            
         
            <tr>
  
              <td align="left"><input class="newsletter-email" type="email" name="ne" size="30" required></td>
            </tr>
            
            <tr>
              <td colspan="2" class="newsletter-td-submit">
                <input class="newsletter-submit" type="image" src="<?php bloginfo('template_directory') ?>/img/newsletter.png"/>
              </td>
            </tr>
            
            </table>
            </form>
            </div>
  
        </div>
  
  
      </div>
</div>-->
<div  id="foot2">
		<div class="grid-container">

			<div id="latest-posts">
				<h6>Latest Blog Post:<a href="<?php bloginfo('url') ?>/blog">See all</a></h6>
				<?php echo do_shortcode('[display-posts category="blog" posts_per_page="1"  include_excerpt="true"]') ?>

			</div>

			<div id="help-box">
				<h6>Engage Tech-Nique</h6>
				<?php echo do_shortcode('[gravityforms id="1"]') ?>
				
			</div>

		</div><!-- end grid-container -->
</div>
    <div id="Footer">
        <div class="grid-container" id="footer">
    
          <div class="left">
            <div class="left left1">
              <h8>Browse</h8>
             <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-foot' ) ); ?>
    
              </div>
              <div class="right">
                <h8>Contact</h8>
                <ul>
                  <li class="green">Address</li>
                  <li>641 Lexington Ave</li>
                  <li>New York, NY 10022</li>
                  <li class="green">Telephone</li>
                  <li>Main: 646-374-1744</li>
				  <li class="green">E-Mail</li>
				  <li>info@tech-niquepartners.com</li>
                </ul>
    
              </div>
    
          </div>
    
    
          <div id="copyright">
    
            <a href="<?php bloginfo('url'); ?>">
              <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
            </a>
            <p>Copyright &copy; <?php echo date('Y'); ?>. Tech-nique Partners.<!-- | Site design by: <a href="http://www.onlywebsites.com">Onlywebsites.com</a>--></p>
            
          </div>
    
        </div><!-- end grid-container -->
    </div>
	</footer>

<?php  wp_footer(); ?>

</body>
<script src="<?php bloginfo('template_directory') ?>/scripts/scripts.js" type="text/javascript"></script>

<script src="<?php bloginfo('template_directory') ?>/js/jquery.meanmenu.js" type="text/javascript"></script>

<script>
	
jQuery(document).ready(function () {

    jQuery('header nav').meanmenu();

});

</script>

</html>