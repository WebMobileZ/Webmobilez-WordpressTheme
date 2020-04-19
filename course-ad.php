<?php 

  /* Template Name: Course
    */
  
  
  ?> 
  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
 	<title>WebmobileZ Training, development, java full-stack, HTML5, CSS3, core java, spring boot, SQL agile process.</title>
 	<meta name="description" content="Get Developer ready with help from our Industry Experts with Decades of experience in Java Full Stack Development.100% Job placement,Resume Preparation,MarketingTechnical, Mock Interviews."/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/css/bootstrap-select.min.css">
    <!--icon font css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/elagent/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/animation/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/scroll/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylenew23.css">
    
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landingpagenew22.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsivenew22.css">
	<style>
	.wpcf7-response-output{
		color:black;
	}
	span.wpcf7-not-valid-tip {
		margin-top:0em !important;
	}
	span.wpcf7-not-valid-tip{ display: inline-block;
float: left;}
	.wpcf7-form div.wpcf7-validation-errors{ color: #ff0000 !important}
	.wpcf7-form select.form-control:not([size]):not([multiple]) {
    height: auto !important;
}
	@media screen and (max-width: 900px) and (min-width: 320px) { 
		#tidio-chat {
    display: none;
}
 .wpcf7-form.invalid .form-control {
    padding: auto !important;
  }
}
		.paypal{
			display:none;
		}
</style>
	<style>

    .banner_area {
    min-height: 800px;
    background: -webkit-linear-gradient(130deg, rgba(13, 13, 13, 0.8) 0%, rgba(13, 13, 13, 0.8) 100%), url(images/banner3.png) no-repeat scroll center 0/cover;
    background: -o-linear-gradient(130deg, rgba(13, 13, 13, 0.8) 0%, rgba(13, 13, 13, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/images/banner3.png) no-repeat scroll center 0/cover;
    background: linear-gradient(-40deg, rgba(13, 13, 13, 0.8) 0%, rgba(13, 13, 13, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/images/banner3.png) no-repeat scroll center 0/cover;
    background-attachment: fixed;
    text-align: center;
    position: relative;
}
    /*
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 0px;
    z-index: 9;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    -webkit-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
*/
    .header_area{
        background-color: #fff;
    }
.banner_area{
    color: #fff;
}
.callbackmenu.menu > .nav-item {
    position: relative;
    padding-bottom: 15px;
    padding-top: 15px;
}
.textColor{
  color:#fff;
}
.inlineContent{
list-style-type: none;display: inline-block;
}
.text-webmobilezO{
  color:#d94c27;
}
.text-webmobilezW{
    font-size: 30px;
  color:#fff;
}
.list-check li i {
    color: #d94c27;
    font-size: 16px;
    padding-right: 5px;
}
.h_footer_dark {
    background: #010e28;
    padding: 100px 0px 120px;
    }
    .list-check li{
        position: relative;
        padding-left: 20px;
        font-weight: 400;
    }
    .list-check li::before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0;
    font-family: 'Font Awesome 5 Free';
    color: #d94c27;
}
    .mobilenumber{
            display: none;
        color: #000000;
        font-weight: 400;
        font-size: 13px;
        }
    
    @media (max-width: 800px){
        .mobilenumber{
            display: inline-block;
        }
        .bannercont{
            display: none;
        }
        .md-form i{
            line-height: 23px;
        }
    }
    @media (max-width: 450px){
    
        .header_area{
            position: relative;
        }
        .header_area .navbar-brand.sticky_logo img{
            width: 130px;   
        }
        
        .md-form{
            margin: 0px 0px 10px 0px !important;
        }
        .banner_area{
            min-height: auto;
            padding-bottom: 25px;
        }
        .call-back ul{
            padding-left: 0px;
        }
        }
        .agency_banner_btn{
                background: #d94c27;
                border: 1px solid #d94c27;
        }
    .agency_banner_btn:hover {
    color: #d94c27;
}
.call-back h2, .call-back h3 {
    color: #fff;
}
.call-back ul li a{
    color:#d94c27;
}
.about_btn:hover {
    color: #d94c27;
    background: #fff;
      transform: scale(1.2);
}
.pr_70 {
    padding-right: 63px;
}
.t_color3W {
    color: #fff;
}
.sec_pad {
    padding: 76px 0px;
}
.t_color3 {
    color: #000;
}
.s_pricing-item .tag_label{
       background: #d94c27 !important; 
}
.s_pricing-item .tag_label:before {
  
    border-top: 20px solid #d94c27 !important;
    border-bottom: 20px solid #d94c27 !important;
}
.s_pricing-item .strikeprice {
    color: #051441;
    padding: 18px 0px 40px;
    
}
    </style>
</head>
<?php wp_head(); ?>
<body>

    <header class="header_area">
    
       <nav class="navbar navbar-expand-lg navbar-light menu_one">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <a class="navbar-brand sticky_logo" href="<?php echo site_url(''); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav menu ml-auto callbackmenu align-items-center">
                    <li class="nav-item">
                        <a class="nav-link purchase_btn" href="#" target="_black"><i class="fa fa-phone"></i> +1 (224) 703-3561 <p class="f_size_10 m-0">Please Give a call.</p></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn_hover agency_banner_btn cus_mb-10" data-target=".bd-request-modal-lg" data-toggle="modal">Request a Call Back</a>
                    </li>
                </ul>
            </div> 
            
            <a class="nav-link purchase_btn mobilenumber" href="#" target="_black"><i class="fa fa-phone"></i> +1 (224) 703-3561</a>
        </div>
    </nav>
        
    </header>

    
    <section class="banner_area d-flex align-items-center">
        <div class="container">
             <div class="row align-items-center">
                 <div class="prototype_content">
                        <h2 class="f_size_40 f_700 t_color3W l_height50 pr_70 mb_20 wow fadeInLeft"
                            data-wow-delay="0.3s">Java Full Stack Development & Training</h2>

                    </div>
                <div class="col-sm-7 text-left bannercont">
                                  <div class="row">
                    <div class="col-lg-12 headingP">
                            <h6 class="text-webmobilezW mb-4">
                                Join our  <span style="color:#D94C27 ;"> professional IT courses</span>  and move ahead in your Career, with the help of our <span style="color:#D94C27 ;">Experienced Trainers</span> 

    We ensure <span style="color:#D94C27;">100% placement</span>  for all our Students!!!
                            </h6>
                        </div>
            </div>
                 <div class="row">
                    <div class="col-lg-6">

                            <ul class="list-check inlineContent p-0">
                                <li>100% Job placement
                                </li>
                                <li>Resume Preparation
                                </li>
                            </ul>
                        </div>
                 <div class="col-lg-6">

                            <ul class="list-check inlineContent p-0">
                                <li>Marketing
                                </li>
                                <li>Technical Mock Interviews</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                <div class="col-lg-5">
                    <div class="form_content textColor webForm text-center" id="form-content">
						<?php echo do_shortcode('[contact-form-7 id="926" title="Course Landing"]'); ?></div>
                     <!--   <form class="textColor webForm text-center" method="post">
                            <div class="text-center">
                                <h4 class="text-webmobilezO">"THIS ENQUIRY WILL CHANGE YOUR CAREER"</h4>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name2" placeholder="Name" class="form-control">
                            </div>
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="orangeForm-email2" placeholder="Email" class="form-control">
                            </div>
                            <div class="md-form">
                                <i class="fas fa-phone prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass2" placeholder="Phone" class="form-control">
                            </div>
                            <div class="text-center">
                                    <button class="btn btn_three btn_hover f_size_15 f_500 wow fadeInLeft"
                                        data-wow-delay="0.8s" type="submit">Get Free Consultation Today</button>
    
                                </div>
                            <div class="clearfix"></div>
                        </form>-->
                    </div>
                </div>
            </div>
        
       
    </section>
<section class="features_area sec_pad">
            <div class="container">
                <div class="row feature_info">
                    <div class="col-lg-7">
                        <div class="feature_img f_img_one">
                            <img class="wow fadeInRight" data-wow-delay="0.1s" src="https://webmobilez.com/wp-content/uploads/2020/01/webmobileTeam2-min-scaled.jpg" alt="">                   
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="f_content">
                           
                            <h2 class="f_600 f_size_30">WE HELP YOU FIND YOUR JOB</h2>
                            <p class="f_400">
                             The Java Full Stack Training focuses on the advanced concepts of Java Full Stack development that includes front-end user interface, AngularJS, core and advanced Java, spring and Hibernate framework, MongoDB and advanced Python in great detail. Using one of the most profound and 4th generation object-oriented programming language Java, a Java Full Stack Developer is able to develop a robust and highly secure web application that would meet all the requirements of the clients. By the end of the Java Full Stack Course, you will be able to utilize various functions such as CRUD, API, database technology, HTML5, CSS3, JavaScript, web server technologies, RESTful services, etc effectively.  </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<section class="faq_area bg_color sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pr_50">
                        <div class="faq_tab">
                            <h4 class="f_p t_color3 f_600 f_size_22 mb_40">Quick Navigation</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
								 
								
								<?php 
			 $args = array(
                                               'taxonomy' => 'coursetype',
                                           'order' => 'desc',   // Orders the list by post count
                                     'orderby'        => 'term_id'
          
                                           );

                                   $cats = get_categories($args);
						if ( $cats ) {
							$i=1;
    foreach ( $cats as $post ) :
      $string = strtolower(preg_replace('/\s+/', '', $post->name));
						
								$subtitle=strtolower(substr($string,0,4));
							
								?>
					
                                <li class="nav-item">
                                    <a class="nav-link <?php if($i==1) echo 'active'; ?>" id=<?= $subtitle ?>"-tab" data-toggle="tab" href="#<?= $subtitle ?>" role="tab" aria-controls="<?= $subtitle ?>" aria-selected="true"><?php echo $post->name; ?></a>
                                </li>
                           <?php  $i++;    endforeach; 
  
}
						?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content faq_content" id="myTabContent">
                            <?php   $j=1;    foreach($cats as $cat) {
                                   
                                    if($j==1)
                                    {
                                        $active="show active";
                                    }else
                                    {
                                         $active="";
                                    }
                                 $string = strtolower(preg_replace('/\s+/', '', $cat->name));
                                 	$subtitle=strtolower(substr($string,0,4));
                                ?>
                            
                            <div class="tab-pane fade <?= $active ?>" id="<?= $subtitle ?>" role="tabpanel" aria-labelledby="<?= $subtitle ?>-tab">
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20"><?= $cat->name ?> </h3>
                                <div id="accordion<?= $j ?>">
                                    <?php 


                                                                      $args = array('post_type' => 'courses','order'   => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'coursetype',
                                                'field' => 'slug',
                                                'terms' => $cat->slug,
                                            ),
                                        ),
                                     );

                                     $loop = new WP_Query($args);
                                     if($loop->have_posts()) {
                                     
                                        $k=1;
                                        while($loop->have_posts()) : $loop->the_post(); 
                              
                                            ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?= $k ?>" aria-expanded="false" aria-controls="collapseOne<?= $k ?>">
                                                    <?php echo get_the_title();?><i class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne<?= $k ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion<?= $j ?>">
                                            <div class="card-body">
                                                <?php  the_content();?>
                                            </div>
                                        </div>
                                    </div>
                                       <?php $k++;
        endwhile;
     } ?>
                                </div>
                            </div>
                             <?php $j++; }  wp_reset_postdata(); ?>

                            
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="s_pricing_area sec_pad">
            <div class="container custom_container">
                <div class="sec_title text-center mb_70">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Winter Sale</h2>
                 
                </div>
                <div class="row mb_30">
                    <div class="col-lg-14 col-sm-12">
                        <div class="s_pricing-item">
                           
                            <div class="tag_label">Payment</div>
                            <h5 class="f_p f_600 f_size_20 t_color mb-0 mt_40">Price</h5>
                          <div class="strikeprice f_size_40 f_p f_700"> <strike>$998.00</strike><sub class="f_400 f_size_16">/ 10 weeks</sub></div>
                            <div class="price f_size_40 f_p f_700">$499.00<sub class="f_400 f_size_16">/ 10 weeks</sub></div>
                            <a href="#" data-target=".bd-example-modal-lg" data-toggle="modal" class="price_btn btn_hover mt_30">Make a payment through PayPal</a>
                        </div>
                    </div>
               
                </div>
            </div>
        </section>
        <section class="seo_call_to_action_area sec_pad_sm pb-0">
                <div class="container">
                <div class="call-back">
                        <h2>HAVE YOU ANY QUESTIONS?</h2>
                        <ul><li > <a class="about_btn cus_mb-10" href="tel: +1 (224) 703-3561 ">Call Us Now &nbsp;  +1 (224) 703-3561 </a></li>
                            <li><a href="#" class="about_btn cus_mb-10" data-wow-delay="0.5s" data-target=".bd-request-modal-lg" data-toggle="modal">REQUEST A CALL BACK</a></li>
                        </ul>
                    </div>
                </div>
            </section>
	 <div class="modal fade bd-request-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">                         
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">        
                           <?php echo do_shortcode('[contact-form-7 id="927" title="Request Call back"]'); ?>
							
                        </div>
						 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
                    </div>
                </div>
            </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">                         
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">        
                           <?php echo do_shortcode('[contact-form-7 id="925" title="Make Payment"]'); ?>
							 <div class="paypal">
								 <?php $price=499; echo do_shortcode('[wp_paypal button="buynow" class="paypal-button" name="Webmobilez" amount="499.00"]'); ?>
							</div>
                        </div>
						 <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
                    </div>
                </div>
            </div>
        <div class="social_icons">
            <!-- <a class="social_icons_desktop" target="_blank" href="https://wa.me/22247033561 "><i class="fab fa-whatsapp"></i></a>
        <a class="social_icons_desktop" target="_blank" href="tel:224703-3561"><i class="fa fa-phone" aria-hidden="true"></i></a> -->
            <a class="social_icons_mobile" target="_blank" href="tel:224703-3561"> <i class="fa fa-phone"
                    aria-hidden="true"></i> Call Now </a>
            <span class="separator">|</span>
            <a class="social_icons_mobile" target="_blank" href="https://wa.me/12247033561 "><i
                    class="fab fa-whatsapp"></i> What's App</a>
        </div>
        <div class="scroll">
            <button class="scroll-btn btn btn-primary scroll-top" data-scroll="up" type="button">
                <i class="fa fa-chevron-up"></i>
            </button>
        </div>
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
      
	 
</body>
<?php wp_footer(); ?>
</html>
