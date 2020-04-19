<?php 

  /* Template Name: Thank You
    */
  
  
  ?> 
  <!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">

	<meta name="description" content="Please Call +1 (607) 444- 8139 for more details. Webmobilez is a Michigan Web Design & Website Development Firm specializing in create websites with user experience (UX) for your business to Connect Customers."/>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <!--icon font css-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/themify-icon/themify-icons.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/font-awesome/css/all.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/flaticon/flaticon.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/animation/animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylenew23.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landingpagenew24.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsivenew22.css">
<style>	@media screen and (max-width: 900px) and (min-width: 320px) { 
		#tidio-chat {
    display: none;
}
 .wpcf7-form.invalid .form-control {
    padding: auto !important;
  }
}
</style>
<style>
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
    color: #000;
}
.call-back ul li a{
    color:#d94c27;
}
.about_btn:hover {
    color: #d94c27;
    background: #fff;
      transform: scale(1.2);
}

    </style>

	<!-- Event snippet for WebMobilez conversion page -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146520629-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146520629-1');
</script>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-709245238/sh8dCLPgq6wBELbymNIC'});
</script>
</head><body>
<header class="header_area">
<nav class="navbar navbar-expand-lg navbar-light menu_one">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <a class="navbar-brand sticky_logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav menu ml-auto callbackmenu align-items-center">
                    <li class="nav-item">
                        <a class="nav-link purchase_btn" ><i class="fas fa-comments"></i> Live Chat <p class="f_size_10 m-0">any question? we are here..</p></a>
						
                    </li>
					<li class="nav-item"><a class="nav-link purchase_btn"><i class="fa fa-phone"></i> <?php echo get_field("contact_no",882); ?><p class="f_size_10 m-0">Please Give a call.</p></a>
                    </li>
					
                </ul>
            </div> 
			
			<a class="nav-link purchase_btn mobilenumber" href="tel:<?php echo get_field('contact_no',882); ?>" target="_black"><i class="fa fa-phone"></i> <?php echo get_field("contact_no",882); ?></a>
        </div>
    </nav>
	</header>
	<section class="sec_pad_sm ">
        <div class="container">
	<div class="alert alert-success" role="alert">
 Thank You! One of our Consultant will give you a call in 5 to 10 minutes
</div><button onclick="window.history.go(-1); return false;">Go Back</button>

<script>
function goBack() {
	location.href = "https://webmobilez.com/web-development-ad/";
 // window.history.back();
}
</script>
		</div></section>
			
	<footer class="footer_area h_footer_dark h_footer_dark_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget dark_widget company_widget pl_20 mb_20">
<a  class="f-logo" style="float:left;"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="logo"></a><br><br>
                            <p>© 2019 WebmobileZ, LLC. All rights reserved.</p>
                            <div class="f_social_icon">
<a href="https://www.facebook.com/webmobilez/" target="_blank" class="ti-facebook"></a><a href="https://www.linkedin.com/company/webmobilez/" target="_blank" class="ti-linkedin"></a><a href="https://m.youtube.com/channel/UCTjRdkoOnM-3l-nGB7SAgIA" target="_blank" class="ti-youtube"></a><a target="_blank" href="https://www.yelp.com/biz/webmobilez-farmington-hills"><i class="fab fa-yelp"></i></a>
<a target="_blank" href="https://www.meetup.com/webmobilez/"><i class="fab fa-meetup"></i></a>
</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget dark_widget about-widget pl_20">
                            <h3 class="f-title f_500 t_color f_size_18 mb_40">Services</h3>
<ul class="list-unstyled f_list">
<li>Web Development</li>
<li>Android App</li>
<li>IOS App</li>
<li>Desktop Applications</li><li>Digital Marketing</li>
<li>E-commerce Solutions</li>
<li>UI/UX Development</li>
<li>Tools &amp; Integrations 
	</li>
	
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget dark_widget about-widget pl_20">
                            <h3 class="f-title f_500 t_color f_size_18 mb_40">Industries Experience</h3>
<ul class="list-unstyled f_list">
	
<li>Hospital & Healthcare</li>
<li>Food & Restaurant</li><li>Education & eLearning</li>
<li>Consulting Services</li><li>manufacture and construction</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget dark_widget about-widget pl_20">
                         <h3 class="f-title f_500 t_color f_size_18 mb_40">Contact Us</h3><ul class="list-unstyled f_list"><li>Sales: <?php echo get_field("contact_no",882); ?></li> <li>Email: Srija@webmobileZ.com</li>
                            </ul>
                        </div>
                    </div>
         </div>
            </div>
        </footer>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Let's Build Something Great Together</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">    
                        
                          <?php echo do_shortcode('[contact-form-7 id="896" title="Google ads"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        <div class="social_icons">
            <!-- <a class="social_icons_desktop" target="_blank" href="https://wa.me/12247033561 "><i class="fab fa-whatsapp"></i></a>
     <a class="social_icons_desktop" target="_blank" href="tel:224703-3561"><i class="fa fa-phone" aria-hidden="true"></i></a> -->
<a class="social_icons_mobile" target="_blank" href="tel:<?php echo get_field('contact_no',882); ?>"> <i class="fa fa-phone" aria-hidden="true"></i> Call Now </a>
<span class="separator">|</span>
<a class="social_icons_mobile" target="_blank" href="https://wa.me/<?php echo get_field('owner_no',882); ?>"><i
                    class="fab fa-whatsapp"></i> What's App</a>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/propper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendors/wow/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendors/isotope/isotope-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main1.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/thirdparty.js"></script> -->
</body></html>
