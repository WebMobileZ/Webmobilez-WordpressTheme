  <?php 

  /* Template Name: Services
  */
  get_header();
  ?>
		<section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="<?php echo get_template_directory_uri(); ?>/img/breadcrumb/banner_bg.png" alt="">-->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Services <span class="t_color3">WebMobileZ</span> </h1>
                  
                </div>
            </div>
        </section>
        <br><br>
	<!-- service -->
<section class="saas_features_area_three bg_color">
            <div class="container">
                <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="f_p f_size_30 l_height50 f_600 t_color">Our great services</h2>              
                </div>
                <div class="row mb_30 new_service">
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="number">1</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="https://webmobilez.com/wp-content/uploads/2019/07/code-1.png" height="80px" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Web Development</h4>
                                <p class="f_400 f_size_15 mb-0">We’ll build a beautiful website that captures your visitor’s attention and business.
                          Your website will always adapt to their device giving them the perfect website experience.</p>
								<a href="<?php echo site_url('web-development'); ?>" class="learn_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="number">2</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="https://webmobilez.com/wp-content/uploads/2019/07/smartphone.png" height="80px" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Mobile Development</h4>
                                <p class="f_400 f_size_15 mb-0">We provide you with a flexible and comprehensive mobile app development solution to impart a seamless mobile experience to your customers.</p>
									<a href="<?php echo site_url('mobile-development'); ?>" class="learn_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="saas_features_item text-center wow fadeInUp" data-wow-delay="0.7s">
                            <div class="number">3</div>
                            <div class="separator"></div>
                            <div class="new_service_content">
                                <img src="https://webmobilez.com/wp-content/uploads/2019/07/digital-campaign-1.png" height="80px" alt="">
                                <h4 class="f_size_20 f_p t_color f_500">Digital Marketing</h4>
                                <p class="f_400 f_size_15 mb-0">Establish, grow, and engage with your audience in meaningful ways with our unique social media system.
                          Boost your online ranking with our amazing SEO tools.</p>
									<a href="<?php echo site_url('digital-marketing'); ?>" class="learn_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
<!-- eend service -->

	
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
                                        <img  class="img-fluid" src=<?php echo esc_url($featured_img_url); ?> alt="">
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
	
       
        <?php get_footer(); ?>