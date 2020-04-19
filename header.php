<!doctype html>
<html <?php language_attributes(); ?>>

 <?php   global $post;
    $post_slug = $post->post_name; ?>
<head>
    <!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/bootstrap-selector/css/bootstrap-select.min.css">
    <!--icon font css-->
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/simple-line-icon/simple-line-icons.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/font-awesome/css/all.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/themify-icon/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/elagent/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/animation/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendors/nice-select/nice-select.css">
    <!--<link rel="stylesheet" href="vendors/scroll/jquery.mCustomScrollbar.min.css">-->
    <?php if($post_slug=="our-work"){ ?>
          <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style41.css">
 <?php   }else{ ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/webmobilezstyle1.css">
  <?php } ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive51.css">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/web-latest.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<style>
	.learn_btn:hover {
    color: #d94c27 !important;
}
	.learn_btn:hover:before {
    background: #d94c27 !important;
}
.textwidget .list-unstyled:hover {
     color: #677294;
}
	.textwidget {
     color: #677294;
}
	.apply_button{
	    font: 500 14px "Poppins", sans-serif !important;
    color: #fff !important;
	}
	.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link
	{
		color:#051441 !important;
	}
	.menu > .nav-item.submenu .dropdown-menu .nav-item .nav-link:hover
	{
		color:#d94c27 !important;
	}
	.agency_testimonial_info .owl-next
	{
		    background: #d94c27;

	}
	.agency_testimonial_info .owl-prev, .agency_testimonial_info .owl-next i.ti-angle-left
	{
		    background: #d94c27;
		
	}
	.phone-link{
		color:#fff !important;
	}
	.wp_menu .nav-item .nav-link
	{ 
	    color:#fff !important; 
	    
	}
		
	.customer_logo {
  width: 50%;
  text-align: center;
  margin: 0 auto;
}
	</style>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<!--	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146520629-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146520629-1');
  gtag('config', 'AW-709245238');
</script> -->

<?php if ( is_page( array( 'topics-java-full-stack' , 'core-java','angular-course-material','downloads','javascript','html','css','how-to-install-gitkraken-on-windows' ) ) ){ ?>
   <style> .breadcrumb_area {
    padding-bottom: 49px;
   
}
 </style>
<?php } ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

 
 
    <div class="body_wrapper">
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="<?php echo site_url(''); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo_white.svg" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ml-auto">
                           
							<li class="nav-item <?php if($post_slug=="about-us") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('about-us'); ?>">About</a>
                            </li>
							<li class="dropdown submenu nav-item <?php if($post_slug=="web-development" ||$post_slug=="mobile-development" || $post_slug=="digital-marketing" || $post_slug=="application-training") echo 'active'; ?>"><a title="Pages" class="dropdown-toggle nav-link"  href="<?php echo site_url('services'); ?>">Services</a>
                                <ul role="menu" class=" dropdown-menu">
                                   
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('web-development'); ?>"> Web Development</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo site_url('mobile-development'); ?>">Mobile Development</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('digital-marketing'); ?>">Digital Marketing</a></li>
									 <li class="nav-item"><a class="nav-link" href="<?php echo site_url('application-training'); ?>">Application Training</a></li>
                                </ul>
                            </li>
							<li class="nav-item <?php if($post_slug=="our-work") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('our-work'); ?>">Our Work</a>
                            </li>
							<li class="nav-item <?php if($post_slug=="careers") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('careers'); ?>">Careers</a>
                            </li>
							<li class="nav-item <?php if($post_slug=="schedule") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('schedule'); ?>">Schedule</a>
                            </li>
                          <!--  <li class="nav-item <?php if(is_home()) echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('blog'); ?>">Blog</a>
                            </li>  -->
							<li class="nav-item <?php if($post_slug=="contact-us") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo site_url('contact-us'); ?>">Contact</a>
                            </li>
							 <?php
                         if (!is_user_logged_in()){ ?>
                            
               
                       <?php 
                        } else {
                            $user = wp_get_current_user();  ?>
							
							<li class="nav-item <?php if($post_slug=="contact-us") echo 'active'; ?>">
                                <a class="nav-link" href="<?php echo wp_logout_url(); ?>"><?php echo 'Hi,'.$user->user_login.' '; ?> 	&nbsp; Logout</a>
                            </li>
                          
                        <?php } ?>
                          
                        </ul>
					 <?php	  if (!is_user_logged_in()){ ?>
						 <a class="nav-link phone-link" href="tel:2247033561"> <i class="fa fa-phone"></i>  (224) 703-3561</a>
						<?php } ?>
							
                    </div>
                </div>
            </nav>
        </header>
