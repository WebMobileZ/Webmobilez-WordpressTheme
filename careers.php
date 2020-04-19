 
  <?php 

  /* Template Name: Careers
    */
  get_header();
  ?>
   <section class="breadcrumb_area">
          <!--   <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">-->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><span class="t_color4">Web</span><span class="t_color3">MobileZ</span> Careers</h1>
             
                </div>
            </div>
        </section>
        
        <section class="job_listing_area bg_color sec_pad">
            <div class="container">
                
                
                <div class="job_listing m-0">
                    <h3 class="f_p f_size_24 l_height28 f_500 t_color3 mb-30">Open Job Positions</h3>
                    
                    <div class="listing_tab">
                        <div class="item">
                       			<?php 
						$lastposts = get_posts([
  'post_type' => 'job',
  'post_status' => 'publish',
  'numberposts' => -1,
   'order'    => 'ASC'
]);
				$i=1;
						if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
                            <div class="list_item">
                                <!-- <figure><a href="#"><img src="img/process/Avast_Antivirus.png" alt=""></a></figure> -->
                                <div class="joblisting_text">
                                    <div class="job_list_table">
                                        <div class="jobsearch-table-cell">
                                            <h4><a href="#" class="f_500 t_color3"><?php the_title(); ?></a></h4>
                                            <ul class="list-unstyled">
                                                <li class="p_color">Full Time</li><li>
                                                <?php
                                                
                                                $datetime1 = new DateTime( $post->post_date );
$today_obj      = new DateTime( date( 'Y-m-d', strtotime( 'today' ) ) );            // Get today's Date Object

$registered_obj = new DateTime( $post->post_date );    // Get the registration Date Object
$interval_obj   = $today_obj->diff( $registered_obj );                              // Retrieve the difference Object

if( $interval_obj->days > 1 ) {             // The most commonly hit condition at the top
    echo __( "Published {$interval_obj->days} days ago", "" );
} elseif( 0 == $interval_obj->days ) {      // IF they registered today
    echo __( 'Published Today', '' );
} elseif( 1 == $interval_obj->days ) {      // IF they registered yesterday
    echo __( 'Published Yesterday', '' );
} else {                                    // The off-chance we have less than zero
    echo __( 'Published', '' );
}
?>
                                               </li>
                                            </ul>
                                        </div>
                                        <div class="jobsearch-table-cell">
                                            <div class="jobsearch-job-userlist">
                                                <a href="<?php echo get_permalink(); ?>" class="apply_btn">Apply Now</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
endforeach; 
    wp_reset_postdata();
}
						?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
  
        <?php 
  
  get_footer();
  ?>