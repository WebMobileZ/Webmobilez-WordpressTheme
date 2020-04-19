<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
if( !is_user_logged_in() ) {
    wp_redirect('/wp-login.php');
    //auth_redirect();
    exit;
}
?>
<style>
.sec_pad {
    padding: 27px 0px !important;
}
	body{
	color: black !important;
    font-weight: 600 !important;	
	}
	figure{
		margin-bottom:40px !important;
		margin-top:20px !important;
	}
	p{
		color:black !important;
	}
	 td,  th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #d94c27;
  color: white;
}
	h2, h3, h4, h5, h6 {
    color: #d94c27;
}
	pre{
		background:#d5e9f6 !important;
	}
	.popmake-close{
		display:none !important;
	}
	    .agency_banner_btn{
                background: #d94c27;
                border: 1px solid #d94c27;
        }
    .agency_banner_btn:hover {
    color: #d94c27;
}
</style>
<section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container-fluid">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700  w_color l_height50 mb_20"><?php the_title(); ?> </h1>   
					<a href="<?php echo site_url('topics-java-full-stack'); ?>" class="w_color" >All Topics &nbsp;</a> <span class="w_color" >> &nbsp;</span><a href="#" class="w_color"><?php the_title(); ?></a>
                </div>
            </div>
        </section>
	    <section class="contact_info_area sec_pad bg_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pr-0">
                     <?php echo the_content(); ?>
						
                    </div>
                   
                </div>
            </div>
        </section>
<div class="new_footer_top">
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
    
        <section class="seo_call_to_action_area sec_pad">
            <div class="container">
                <div class="seo_call_action_text">
                    <h2>Grow your business the smart way with digital World</h2>
                 
                </div>
            </div>
        </section>
 <footer class="payment_footer_area payment_footer_area_two">
            <div class="footer_top_six">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-4 col-sm-6">
                            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

                            <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            <?php endif; ?>
                        </div>
						<div class="col-lg-4 col-sm-6 text-center">
                            <div class="f_widget company_widget">
                                <a href="<?php echo site_url(''); ?>" class="f-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo"></a>
                                <p class="mt_40">Copyright © 2017 <a href="<?php echo site_url(''); ?>"> WebmobileZ</a>  Technologies  All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget about-widget text-right">
                                 <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
                            <?php endif; ?>
                               
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                 <h2>Let's Build Something Great Together</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
				 <div class="message">							   
							</div>   
				<!--<div class="calendly-inline-widget" data-url="https://calendly.com/srija/webmobilez" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script> -->
<!-- Calendly inline widget end -->
            <?php echo do_shortcode('[contact-form-7 id="548" title="Get Start"]');
				?>
            </div>
				
			    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>	
				
        </div>
  </div>
</div>
 <div class="social_icons">
    <a class="social_icons_desktop" target="_blank" href="https://www.facebook.com/webmobilez/"><i class="fab fa-facebook-f"></i></a>
    <a class="social_icons_mobile" target="_blank" href="https://www.facebook.com/webmobilez/"><i class="fab fa-facebook"></i></a>
    <a target="_blank" href="https://www.instagram.com/webmobilez/"><i class="fab fa-instagram"></i></a>
    <a target="_blank" href="https://www.linkedin.com/company/webmobilez/"><i class="fab fa-linkedin"></i></a>
    <a target="_blank" href="https://www.yelp.com/biz/webmobilez-farmington-hills"><i class="fab fa-yelp"></i></a>
</div>
<style>
	.wpcf7-response-output{
		display:none !important;
	}
</style>
<?php wp_footer(); ?>
   
 <!-- <script src="https://code.jquery.com/jquery-migrate-1.4.1.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/propper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/wow/wow.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>    
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/stellar/jquery.stellar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>


	<script>
		 jQuery(document).ready(function(){ 
  jQuery('.phone_us').mask('(000) 000-0000');
  jQuery('.phone_us1').mask('(000) 000-0000'); 
});
	  jQuery(function () {
      jQuery('.alpha').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
 
 jQuery(".wpcf7-submit").click(function(){
  setTimeout(function(){
  jQuery('.bd-example-modal-l').modal('hide')
}, 4000);
});
</script>
 <script  src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146520629-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146520629-1');
onClick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Send', eventLabel: 'Send', eventValue: 1});"
</script>
<script>
	function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-713254219/QnqYCJHhq6kBEMvKjdQC',
      'event_callback': callback
  });
  return false;
}
var wpcf7Elm = document.querySelector( '.wpcf7' );
 
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
	console.log(event)
	console.log(event.detail.apiResponse.message);
	if(event.detail.apiResponse.status=="mail_sent")
	{
	    gtag_report_conversion();
ga( 'send', 'event', 'Contact Form', 'submit' );
			message='<div class="alert alert-success">'+event.detail.apiResponse.message+'</div>';
			$(".message").html(message);
		//gtag_report_conversion();
		}
	if(event.detail.apiResponse.status!="mail_sent"){
			message='<div class="alert alert-danger">'+event.detail.apiResponse.message+'</div>';
			$(".message").html(message);
		}
   $(".wpcf7-response-output").html("");
}, false );</script>
<script src="//code.tidio.co/8yeykezdvo3adbxs5dsyov4zpiblazvo.js"></script>
</body>
</html>
