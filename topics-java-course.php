<?php
/**
 * Template Name:Topics Full Page
 *

 */

get_header();

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
	   <section class="partner_logo_area_five" >
            <div class="container-fluid">
                <h4 class="f_size_30 f_600 text-center t_color  "><a href="https://webmobilez.com/downloads/" target="_blank"><u>Software Installations</u></a></h4><br>
             <h4 class="f_size_30 f_600 text-center t_color  ">Topics we are going to cover</h4>
                <div class="developer_product_content d_product_content_two text-center p-0">
                            <ul class="nav nav-tabs develor_tab mb-30" id="myTab2" role="tablist">
                                   
                               
                            </ul>
                            <div class="tab-content developer_tab_content">

                               
                            <div class="tab-pane fade show active " id="clientsideoptions" role="tabpanel" aria-labelledby="clientsideoptions-tab">
                                 <ul class="list-unstyled tech_used">
                                    <?php $args = array('post_type' => 'technologies','order'   => 'ASC',
                                    'posts_per_page' => -1
                                    );

                                     $loop = new WP_Query($args);
                                     if($loop->have_posts()) {
                                     

                                        while($loop->have_posts()) : $loop->the_post(); 
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                                if(get_field('page_link')) {
                                            ?>
           <li class="tech-icon flex-column align-content-center">
                                        
<a href="<?php echo get_field('page_link'); ?>" target="_blank"><img class="img-fluid" src=<?php echo esc_url($featured_img_url); ?> alt="">
                                         <p><?php echo get_the_title();?></p></a>
                                       
                                    </li>
            <?php     }  endwhile;}   ?>
                                    
                                
                                </ul> 
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

 <script  src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<script src="//code.tidio.co/8yeykezdvo3adbxs5dsyov4zpiblazvo.js"></script>
</body>
</html>
