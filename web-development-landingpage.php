 
  <?php 

  /* Template Name: Web Development Landing
    */
  
  ?> 
  
  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
    <title>Webmobilez</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/css/bootstrap-select.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/animation/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/scroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style51.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landing11.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive11.css">
	<style>
	.wpcf7-response-output{
		display:none !important;
	}
		.customer_logo {
  width: 50%;
  text-align: center;
  margin: 0 auto;
}
		
</style>
	<?php wp_head(); ?>
</head>

<body>
        
<header class="header_area">
        <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
                    <div class="callUs">
                            <a>Call Us Now +1 (224) 703-3561</a>
                    </div>
                
                    

                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ml-auto">
                            
                        </ul>
                    </div> -->                    
                </div>
            </nav>
    </header>

    <section class="webContent">
        <div class="container">
            <div class="row">
       <div class="col-lg-5 d-flex align-items-center">
                    <div class="prototype_content">
                        <h2 class="f_size_40 f_700 t_color3 l_height50 pr_70 mb_20 wow fadeInLeft" data-wow-delay="0.3s">The all in one platform powering design</h2>
                        <p class="f_400 l_height28 mb_40 wow fadeInLeft" data-wow-delay="0.5s">Why I say old chap that is spiffing off his nut arse pear shaped plastered Jeffrey bodge barney some dodgy chav cockup sloshed up the duff starkers.!!</p>
                    </div>
                </div>
                <div class="col-lg-7">
                      <div class="form_content webForm">
                            <div class='message'></div>
						
<?php echo do_shortcode('[contact-form-7 id="787" title="Web Development Landing"]'); ?>
                
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hosting_service_area sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="hosting_service_item">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/uiux.png" alt="" >
                            </div>
                            <a href="#"><h4 class="h_head">UI/UX Design</h4></a>
                            <?php echo get_field("ux_design"); ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="hosting_service_item">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/ecommerce.png" alt="" >
                            </div>
                            <a href="#"><h4 class="h_head">Ecommerce Web Development</h4></a>
                            <?php echo get_field("e_commerce_development"); ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="hosting_service_item">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cmsicon.png" >
                            </div>
                            <a href="#"><h4 class="h_head">CMS Development</h4></a>
                        <?php echo get_field("cms_development"); ?>
  
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="hosting_service_item">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/webmaintain.png" alt="" >
                            </div>
                            <a href="#">
                                <h4 class="h_head">Website Maintenance</h4></a>
                   <?php echo get_field("web_maintance"); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="hosting_service_item">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/custom.png" alt="" >
                            </div>
                            <a href="#"><h4 class="h_head">Custom Web Applications</h4></a>
                            <?php echo get_field("custom_web_applications"); ?>
  
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="hosting_service_item">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/cloud.png" alt="" data-pagespeed-url-has>
                            </div>
                            <a href="#"><h4 class="h_head">Cloud Hosting</h4></a>
							<?php echo get_field("cloud_hosting"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <section class="prototype_featured_area sec_pad">
        <div class="container">
            <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_90 wow fadeInUp" data-wow-delay="0.3s">Prototyping built-in. Transform your<br> designs into interactive prototypes without</h2>
            <div class="row flex-row-reverse p_feature_item">
                <div class="col-lg-7">
                    <div class="p_feture_img_one wow fadeInRight" data-wow-delay="0.4s">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/responsive.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="prototype_content wow fadeInLeft" data-wow-delay="0.5s">
                        <h2 class="f_500 f_p t_color3">Responsive Websites</h2>
                        
                        <p>Why I say old chap that is, spiffing off his nut cor blimey guvnor geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around cheesed off bum bag old lost the plot say, spiffing off his nut.!!</p>
                    </div>
                </div>
            </div>
            <div class="row p_feature_item">
                <div class="col-lg-7">
                    <div class="p_feture_img_two wow fadeInLeft" data-wow-delay="0.3s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/responsive.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="prototype_content wow fadeInRight" data-wow-delay="0.3s">
                        <h2 class="f_500 f_p t_color3">Seamlessly communicate, gather feedback, and move projects forward</h2>
                        <div class="prototype_logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/home3/saas.png" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/home3/dimond.png" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/home3/psd.png" alt=""></a>
                        </div>
                        <p>Why I say old chap that is, spiffing off his nut cor blimey guvnor geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around cheesed off bum bag old lost the plot say, spiffing off his nut.!!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="design_tab_area sec_pad">
        <div class="container">
            <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Your design process, in one place</h2>
                <p class="f_400 f_size_16 mb-0">We show off pick your nose and blow off Elizabeth grub haggle <br> dropped a clanger cracking.!</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <ul class="nav nav-tabs design_tab" role="tablist">
                        <li class="nav-item wow fadeInUp" data-wow-delay="0.4s">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">
                                <h5>Revamp your website</h5>
                                <p>Design to development,<br> automated</p>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay="0.6s">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">
                                <h5>CMS Websites</h5>
                                <p>We support CMS websites,<br> You code, maintain by yourself</p>
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay="0.8s">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">
                                <h5>Easy to maintain</h5>
                                <p>Design to development,<br> automated</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="tab_img">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/revamp.png" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="tab_img">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/cms1.jpg" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="tab_img">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/home3/tab.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="app_screenshot_area sec_pad">
            <div class="container custom_container p0">
                <div class="sec_title text-center mb_70">
                    <h2 class="f_p f_size_30 l_height30 f_700 t_color3 mb_20 wow fadeInUp" data-wow-delay="0.2s"> Web Developmet</h2>
                   <!--  <p class="f_400 f_size_16 wow fadeInUp" data-wow-delay="0.4s">Why I say old chap that is spiffing barney, nancy boy bleeder chimney<br> pot richard cheers the little rotter.!</p> -->
                </div>
                <div class="app_screen_info">
                    <div class="app_screenshot_slider owl-carousel">
						<?php 
						$lastposts = get_posts([
  'post_type' => 'projects',
  'post_status' => 'publish',
  'numberposts' => -1,
   'order'    => 'ASC'
]);
						if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
						
						<?php if ( has_post_thumbnail()) {
   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			 
  ?>
                        <div class="item">
                            <div class="screenshot_img">
                                 <a href="<?php echo $large_image_url[0]; ?>" class="image-link"><img src="<?php echo $large_image_url[0]; ?>" alt=""></a>
                            </div>
                        </div>
                     <?php }
                   endforeach; 
    wp_reset_postdata();
}
						?>
                      
                     
                       
                    
                    </div>
                   
                </div>
            </div>
        </section>
     <!-- testmonial -->
 <section class="agency_testimonial_area bg_color sec_pad">
        <div class="container">
            <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_60">We've heard things like</h2>
            <div class="agency_testimonial_info">
                 <div class="testimonial_slider owl-carousel">
                         <?php
                $lastposts = get_posts([
                    'post_type' => 'testmonials',
                    'post_status' => 'publish',
                    'numberposts' => -1,
                    'order' => 'ASC'
                ]);
                if ($lastposts) {
                    foreach ($lastposts as $post) :
                        setup_postdata($post);
                        ?>
                 
                    <div class="testimonial_item text-center ">
                        <div class="author_description">
						    <?php
                                if (has_post_thumbnail()) {
                                    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                    ?> <div class="customer_img"><img src="<?php echo $large_image_url[0]; ?>"></div> <?php } ?>
                            <div class="customer_title">
                                <h4 class="f_size_18"><?php echo the_title(); ?></h4>
                                <h6><?php echo get_field("job_description"); ?></h6>
                            </div>
                        </div>
                        <p><?php echo the_content(); ?></p>
					<div class="customer_logo"><img src="<?php echo get_field('logo'); ?>"></div>	
                    </div>
                 
                  <?php
                    endforeach;
                    wp_reset_postdata();
                  
                }
                ?>
                </div> 
            </div>
        </div>
    </section>
<!-- end  test monials -->

	  <section class="partner_logo_area_five" >
            <div class="container">
				
                <h2 class="f_size_30 f_600 text-center t_color l_height45 mb_50">Technologies We use</h2>
                <div class="developer_product_content d_product_content_two text-center p-0">
                            <ul class="nav nav-tabs develor_tab mb-30" id="myTab2" role="tablist">
                                   <?php
                                   $args = array(
                                               'taxonomy' => 'tech-category',
                                              'orderby' => 'count',   // Orders the list by post count
                                                'order' => 'desc',
                                           );

                                   $cats = get_categories($args);

                                $i=1;
                                   foreach($cats as $cat) { $string = strtolower(preg_replace('/\s+/', '', $cat->name));
                                                           if($i==1)
                                                           {
                                                               $active="active nav-link";
                                                           }else
                                                           {
                                                              $active="nav-link";
                                                           }
                                                         
                                ?>
                                <li class="nav-item">
                                    <?php 
                                        echo "<a class='$active' id=$string-tab data-toggle=tab href=#$string role=tab aria-controls=$string aria-selected=false>";
                                                           echo $cat->name;
                                                           echo "</a>";
                                                           
                                                           ?>
             
                                </li>
                                                                   
                                    <?php $i++;
                                       } ?>

                               
                            </ul>
                            <div class="tab-content developer_tab_content">

                                <?php   $j=1;    foreach($cats as $cat) {
                                   
                                    if($j==1)
                                    {
                                        $active="show active";
                                    }else
                                    {
                                         $active="";
                                    }
                                 $string = strtolower(preg_replace('/\s+/', '', $cat->name));
                                ?>
                            <div class="tab-pane fade <?php echo  $active; ?> " id=<?php echo $string; ?> role="tabpanel" aria-labelledby=<?php echo $string."-tab"; ?>>
                                 <ul class="list-unstyled tech_used">
                                    <?php 


                                                                      $args = array('post_type' => 'technologies','order'   => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'tech-category',
                                                'field' => 'slug',
                                                'terms' => $cat->slug,
                                            ),
                                        ),
                                     );

                                     $loop = new WP_Query($args);
                                     if($loop->have_posts()) {
                                     

                                        while($loop->have_posts()) : $loop->the_post(); 
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                            ?>
           <li class="tech-icon flex-column align-content-center">
                                        <div>
                                        <img class="img-fluid" src=<?php echo esc_url($featured_img_url); ?> alt="">
                                         <p><?php echo get_the_title();?></p>
                                        </div>
                                    </li>
            <?php 
        endwhile;
     } ?>
                                    
                                
                                </ul> 
                                </div>
                             <?php $j++; }  wp_reset_postdata(); ?>
                             
                               
                            </div>
                        </div>
  
            </div>
        </section>
    
    <footer class="footer_area footer_three">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-3">
                        <div class="f_widget company_widget">
                            <a href="index.html" class="f-logo"><img src="images/logo.svg" srcset="img/logo-3-2x.png 2x" alt="logo"></a>
                            <p class="f_400 f_p f_size_15 mb-0 l_height28 mt_30">Why I say old chap that is sping lavatory chip shop gosh off his, smashing boot are you taking the piss posh loo brilliant matie boy young.!!</p>
                             <div class="social_icon">
                                <a href="#" class="ti-facebook"></a>
                                <a href="#" class="ti-twitter-alt"></a>
                                <a href="#" class="ti-vimeo-alt"></a>
                                <a href="#" class="ti-pinterest"></a>
                            </div> 
                        </div>
                    </div> -->
                    
                    <div class="col-lg-6">
                        <div class="f_widget about-widget">
                            <h3 class="f-title f_600 f_size_18 mb_40">Address</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">USA: 32985 Hamilton Ct Farmington hills, MI 48334</a></li>
                                <li></li>
                                <li><a href="tel:(224) 703-3561">224 703-3561</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="f_widget about-widget">
                            <h3 class="f-title f_600 f_size_18 mb_40">Contact Us</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="mailto:hello@webmobilez.com">Email:srija@webmobilez.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="mb-0 f_400">Copyright © 2017 <a href="#"> Webmobilez</a></p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="f_menu text-right list-unstyled">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="social_icons">
        <!-- <a class="social_icons_desktop" target="_blank" href="https://wa.me/22247033561 "><i class="fab fa-whatsapp"></i></a>
        <a class="social_icons_desktop" target="_blank" href="tel:224703-3561"><i class="fa fa-phone" aria-hidden="true"></i></a> -->
        <a class="social_icons_mobile" target="_blank" href="tel:+1224703-3561"> <i class="fa fa-phone" aria-hidden="true"></i>  Call Now  </a>
        <span class="separator">|</span>
        <a class="social_icons_mobile" target="_blank" href="https://wa.me/12247033561 "><i class="fab fa-whatsapp"></i> What's App</a>
    </div>
<?php wp_footer(); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/propper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/wow/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/isotope/isotope-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/multiscroll/jquery.easings.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/multiscroll/multiscroll.responsiveExpand.limited.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/vendors/multiscroll/jquery.multiscroll.extensions.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146520629-1"></script>
    <!-- test -->

<script type='text/javascript' src="http://essayhilfe.de/app/plugins/contact-form-7/includes/js/scripts.js?ver=4.7"></script>
 <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.11/dist/jquery-input-mask-phone-number.js"></script>
<script>
	  $(document).ready(function () {
                $('.phone_us').usPhoneFormat({
                    format: '(xxx) xxx-xxxx',
                });
	  });
	  $(function () {
      $('.alpha').keydown(function (e) {
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
 
 $(".wpcf7-submit").click(function(){
  setTimeout(function(){
  $('.bd-example-modal-l').modal('hide')
}, 4000);
});
</script>

<!-- end -->
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
</body>

</html>




