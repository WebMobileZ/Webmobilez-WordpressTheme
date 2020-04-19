 
  <?php 

  /* Template Name: Our Work
    */
  get_header();
  ?>

         <section class="breadcrumb_area">
            <!-- <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><span class="t_color3">WebMobileZ</span> Portfolio</h1>
                    <p class="f_400 w_color f_size_16 l_height26"></p>
                </div>
            </div>
        </section>
<section class="portfolio_area  bg_color">
            <div class="container-fluid">
							<?php 
						$lastposts = get_posts([
  'post_type' => 'projects',
  'post_status' => 'publish',
  'numberposts' => -1,
   'order'    => 'ASC'
]);
				$i=1;
						if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); 
						 $large_image_url = get_field("portfolio_image");
						 if ( $large_image_url) {
            $sec="";
			 $sec2="";
			if($i%2==0)
			{
				 $sec="section__left";
				 $sec2="section__right";
				
				
			}else{
				
				 $sec="section__right";
				 $sec2="section__left";
				
			}
			 
  ?>
				
               
				  <section class="section section--portfolio">
                        <div class="section__left">
                            <div class="frame">
                                <div class="frame__head"> <span class="frame__dots"></span> <span class="addressbar"><a rel="nofollow" href="<?php echo  get_field('web_site_link');?>" target="_blank"><?php echo  get_field('web_site_link');?></a></span> <span class="frame__lines"></span> </div>
                                <div class="frame__body">
                                    <div class="screenshot" style="background-image:url(<?php echo $large_image_url;?>);"></div>
                                </div>
                                <div class="scroll-hint">Hover to scroll</div>
                            </div>
                        </div>
                        <div class="section__right">
                            <h3 class="section__title" data-text="04">
                                <span><?php the_title(); ?></span>
                                <span class="caption">Powered by WebMobileZ</span>
                            </h3>
                            <div class="section__description">
                                <div class="scrollbar">
                                   <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="section_client-detail">
                                <ul class="list--vertical">
                                  <!--  <li> <span class="list__title">Client</span> <span class="list__subtitle"><?php// echo get_field("client"); ?></span> </li> -->
                                    <li> <span class="list__title">technology</span> <span class="list__subtitle"><?php echo get_field("technology"); ?></span> </li>

                                </ul>
                                <div class="btns-wrapper text-center">
                                    <a rel="nofollow" href="<?php echo get_field('web_site_link'); ?>" target="_blank" class="link btn btn--border btn--border-primary">Visit Website</a>
                                </div>
                            </div>
                        </div>
                </section>
 <?php $i++; }
                   endforeach; 
    wp_reset_postdata();
}
						?>
     

            </div>
        </section>
     

        <?php 
  
  get_footer();
  ?>
