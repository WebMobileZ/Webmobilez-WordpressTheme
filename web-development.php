 
  <?php 

  /* Template Name: Web Development
    */
  get_header();
  ?>  
 <section class="saas_banner_area_three owl-carousel">
            <div class="slider_item">
                <div class="container">
                    <div class="slidet_content">
                        <h2><span>WebmobileZ</span><br> Find the Best Solution in Seconds</h2>
                         <?php echo get_field("slider_1_content"); ?>
                    </div>
                    <div class="image_mockup">
                    <!--     <img class="watch" src="img/new/mockup/Watch.png" alt="">
                        <img class="laptop" src="img/new/mockup/Laptop.png" alt="">
                        <img class="phone" src="img/new/mockup/Iphone.png" alt=""> -->
                    </div>
                </div>
            </div>
            <div class="slider_item slider_item_two">
                <div class="container">
                    <div class="slidet_content_two text-center">
                    <?php echo get_field("slider_2_content"); ?>
                    </div>
                    <div class="image_mockup">
                      <!--   <img class="laptop" src="img/new/mockup/dashboard.png" alt=""> -->
                    </div>
                </div>
            </div>
        </section>
		<section class="startup_fuatures_area">
            <div class="container">
                <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">WebMobilez Expertise In</h2>
                </div>
                <ul class="nav nav-tabs startup_tab" id="myTab" role="tablist">
                     <li class="nav-item active">
                        <a class="nav-link active" id="engine-tab" data-toggle="tab" href="#engine" role="tab" aria-controls="engine" aria-selected="false">
                            <span class="icon"><i class="ti-desktop"></i></span>
                            <h3>UI/UX<br> Design</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="app-tab" data-toggle="tab" href="#app" role="tab" aria-controls="app" aria-selected="false">
                            <span class="icon"><i class="icon-screen-tablet"></i></span>
                            <h3>Ecommerce<br> Apps</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hubstaff-tab" data-toggle="tab" href="#hubstaff" role="tab" aria-controls="hubstaff" aria-selected="false">
                            <span class="icon"><i class="icon-settings"></i></span>
                            <h3>CMS<br> Integration</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="false">
                            <span class="icon"><i class="icon-support"></i></span>
                            <h3>Testing<br>Support</h3>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="true">
                            <span class="icon"><i class="ti-cloud"></i></span>
                            <h3>AWS/Azure <br>Cloud</h3>
                        </a>
                    </li>
                </ul>
               <div class="tab-content startup_tab_content" id="myTabContent">
                    <div class="tab-pane fade show active" id="engine" role="tabpanel" aria-labelledby="engine-tab">
                        <div class="startup_tab_img">
                            <?php echo get_field("uiux_design"); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="app-tab">
                        <div class="startup_tab_img">
                            <?php echo get_field("ecommerce_apps"); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hubstaff" role="tabpanel" aria-labelledby="hubstaff-tab">
                        <div class="startup_tab_img">
                            <?php echo get_field("cms_integration"); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
                        <div class="startup_tab_img">
                            <?php echo get_field("testing_support"); ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                        <div class="startup_tab_img">
                          <?php echo get_field("awsazure_"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php if(get_field("why_we_need_website")){  
	/** ?>
		<section class="hosting_features_area">
            <div class="container">
				
                <div class="row">
                    <div class="col-lg-6">
                        <div class="h_features_img">
                            <img src="<?php echo get_field("why_we_need_website_image"); ?>" alt="" data-pagespeed-url-hash="2337690359" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h_features_content">
                            <div class="hosting_title">
                               
                                <?php echo get_field("why_we_need_website"); ?>
                            </div>
                            <div class="media h_features_item">
                              <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/hosting/icon7.png" alt="" data-pagespeed-url-hash="3881791248" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                                <div class="media-body">
                                    <?php echo get_field("why_we_need_website_feature1"); ?>
                                </div>
                            </div>
                            <div class="media h_features_item">
                              <!--  <img src="<?php echo get_template_directory_uri(); ?>/img/hosting/icon8.png" alt="" data-pagespeed-url-hash="4176291169" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
                                <div class="media-body">
                                   <?php echo get_field("why_we_need_website_feature2"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
<?php  **/ 
}
?>
        <section class="hosting_features_area">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="h_features_img">
                           <img src="<?php echo get_field("develope_a_website_content_image"); ?>" alt="" data-pagespeed-url-hash="2632190280" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h_features_content">
                            <div class="hosting_title">
                               <?php echo get_field("develope_a_website_content"); ?>
                            </div>
                            <div class="media h_features_item">
                               <!--<img src="<?php echo get_template_directory_uri(); ?>/img/hosting/icon9.png" alt="" data-pagespeed-url-hash="175823794" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
                                <div class="media-body">
                                   <?php echo get_field("develope_a_website__feature_1"); ?>
                                </div>
                            </div>
                            <div class="media h_features_item">
                              <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/hosting/icon10.png" alt="" data-pagespeed-url-hash="2600469816" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">-->
                                <div class="media-body">
                                     <?php echo get_field("develope_a_website_feature2"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		  <section class="call_action_area">
            <img class="leaf action_one" data-parallax='{"x": -50, "y": 0}' src="<?php echo get_template_directory_uri(); ?>/img/home2/app_bg.png" alt="">
            <img class="leaf action_two" data-parallax='{"x": 40, "y": 0}' src="<?php echo get_template_directory_uri(); ?>/img/home2/bg_shape.png" alt="">
            <div class="container">
                <div class="action_content text-center">
                    <?php echo get_field("device_friendly_widget"); ?>
                </div>
            </div>
        </section>


        <section class="partner_logo_area_five" >
            <div class="container">
                <h2 class="f_size_30 f_600 text-center t_color l_height45 mb_50"><?php echo get_field("technology_title"); ?></h2>
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
                                        <img  class="img-fluid"  src=<?php echo esc_url($featured_img_url); ?> alt="">
                                         <p><?php echo get_the_title();?></p>
                                        </div>
                                    </li>
            <?php 
        endwhile;
     } ?>
                                    
                                
                                </ul> 
                                </div>
                             <?php $j++; } ?>
                             
                               
                            </div>
                        </div>
  
            </div>
        </section>

        <?php 
  
  get_footer();
  ?>