<?php
  /* Template Name: Blog
    */

get_header();

?>
<style>
  
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
	.agency_banner_btn{
                background: #d94c27;
                border: 1px solid #d94c27;
        }
    .agency_banner_btn:hover {
    color: #d94c27;
}

.list-unstyled li i{
padding-right: 8px;
    color: #d94c27;
}
.blog_title,li span{
 
    color: #d94c27;
}

</style>
<section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Our Blog </h1>   
				
                </div>
            </div>
        </section>

            
       <section class="blog_area_two sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 blog_grid_info">
                        <div class="row" id="blog_masonry">
            <?php     if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-6">
                                <div class="blog_list_item blog_list_item_two">
                                    <div class="post_date">
                                        <h2><?=  get_the_date( 'd' ); ?> <span><?=  get_the_date( 'F' ); ?></span></h2>
                                    </div>
                                    <a href="<?php the_permalink() ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                                    <div class="blog_content">
                                        <a href="<?php the_permalink() ?>">
                                            <h5 class="blog_title"><?php the_title(); ?></h5>
                                        </a>
                                        <?php the_excerpt(); ?>
                                        <div class="post-info-bottom">
                                            <a href="<?php the_permalink() ?>" class="learn_btn_two">Read More <i class="arrow_right"></i></a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
       
                 
   <?php     endwhile;
    else :
        _e( 'Sorry, no posts .', 'webmobilez' );
    endif;
    ?>
           </div>

                    </div>
                    <div class="col-lg-2">
                        <div class="blog-sidebar">                           
                            
                            <div class="widget sidebar_widget categorie_widget_two mt_60">
                                <h3 class="widget_title_two">Categories</h3>
                                <ul class="list-unstyled">
                                    <li> <i class="ti-arrow-right"></i><a href="<?php echo home_url('application-training'); ?>"><span>Training</span></a> </li>
                                   <li> <i class="ti-arrow-right"></i><a href="<?php echo home_url('careers'); ?>"><span>Jobs</span></a> </li>
                                </ul>
                            </div>
                          
                          
                        </div>
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

 <div class="social_icons">
    <a class="social_icons_desktop" target="_blank" href="https://www.facebook.com/webmobilez/"><i class="fab fa-facebook-f"></i></a>
    <a class="social_icons_mobile" target="_blank" href="https://www.facebook.com/webmobilez/"><i class="fab fa-facebook"></i></a>
    <a target="_blank" href="https://www.instagram.com/webmobilez/"><i class="fab fa-instagram"></i></a>
    <a target="_blank" href="https://www.linkedin.com/company/webmobilez/"><i class="fab fa-linkedin"></i></a>
    <a target="_blank" href="https://www.yelp.com/biz/webmobilez-farmington-hills"><i class="fab fa-yelp"></i></a>
</div>
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
        <script src="<?php echo get_template_directory_uri(); ?>/vendors/isotope/isotope-min.js"></script>
    

 <script  src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146520629-1"></script>

</body>
</html>
