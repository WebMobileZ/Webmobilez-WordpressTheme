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
?>
<style>
    .blog_content .post_date h2 {

    color: #d94c27;

}
h5{
    color: #d94c27 !important;
}
</style>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylenew23.css">
    
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landingpagenew24.css">
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
    min-height: 500px;
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
.seo_call_action_text h2 {
    font-size: 34px;
}
    </style>
<section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700  w_color l_height50 mb_20"><?php the_title(); ?> </h1>   
					<a href="<?php echo site_url('blog'); ?>" class="w_color" >Our Blog &nbsp;</a> <span class="w_color" >> &nbsp;</span><a href="#" class="w_color"><?php the_title(); ?></a>
                </div>
            </div>
        </section>

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

			if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
			?>
			   <section class="blog_area sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 blog_sidebar_left">
                        <div class="blog_single ">
                           <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= the_title(); ?>">
                            <div class="blog_content">
                                <div class="post_date">
                                    <h2><?= get_the_date( 'd' ); ?> <span><?= get_the_date( 'F' ); ?></span></h2>
                                </div>
                                <div class="entry_post_info">
                                    By: <a href="<?php the_permalink() ?>">WebmobileZ</a>
                                 
                                </div>
                                <a href="#">
                                    <h5 class="f_p f_size_20 f_500 t_color mb-30"><?= the_title(); ?></h5>
                                </a>
                               <?php the_content(); ?>
                               
                        
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="blog-sidebar">
                            
                            <div class="widget sidebar_widget widget_recent_post mt_60">
                                <div class="widget_title">
                                    <h3 class="f_p f_size_20 t_color3">Recent posts</h3>
                                    <div class="border_bottom"></div>
                                </div>
                                <?php $args = array(
    'numberposts' => 5,
    'offset' => 0,
    'post__not_in' => array( $post->ID )
);
$myposts2 = get_posts($args); 
$query = new WP_Query( $args );

if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="media post_item">
                                    <img src="
                <?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="">
                                    <div class="media-body">
                                        <a href="<?php the_permalink() ?>">
                                            <h3 class="f_size_16 f_p f_400"><?= the_title(); ?></h3>
                                        </a>
                                        <div class="entry_post_info">
                                            By: <a href="<?php echo site_url('blog'); ?>">WebmobileZ</a>
                                            <a href="<?php the_permalink() ?>"><?= get_the_date( 'F d, Y' ); ?></a>
                                        </div>
                                    </div>
                                </div>
  <?php  endwhile;
endif; 

wp_reset_postdata(); ?>
                               
                            </div>
                            
                        </div>
                    </div>
                
            </div>
        </section>
            <section class="banner_area d-flex align-items-center">
        <div class="container">
             <div class="row align-items-center">
                
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
						<?php echo do_shortcode('[contact-form-7 id="1869" title="Web Development Landing_copy"]'); ?></div>
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
			<?php
				}

			
			endwhile; // End of the loop.
			?>



<?php
get_footer();
