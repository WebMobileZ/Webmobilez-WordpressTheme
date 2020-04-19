  <?php 

  /* Template Name: About Us
  */
  get_header();
  ?>
		<section class="breadcrumb_area">
           <!-- <img class="breadcrumb_shap" src="<?php echo get_template_directory_uri(); ?>/img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">About <span class="t_color3">WebMobileZ</span> </h1>
                    <p class="f_400 w_color f_size_16 l_height26">Maximize small business growth
and exceed your expectations</p>
                </div>
            </div>
        </section>
	
	<section class="features_area sec_pad">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img src="<?php echo get_field("vision_image"); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="">
                            
                            <h2 class="f_600 f_size_30">Vision</h2>
                            <?php echo get_field("vision_content"); ?>
                        </div>
                    </div>
                </div>
				<div class="row align-items-center">
					<div class="col-lg-8">
                        <div class="">
                            
                            <h2 class="f_600 f_size_30">Mission</h2>
                           <?php echo get_field("mission_content"); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="<?php echo get_field("mission_image"); ?>" class="img-fluid" alt="">
                    </div>
                    
                </div>
                
            </div>
        </section>
		    <section class="process_area bg_color sec_pad">
            <div class="container">


            <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs software_service_tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="de-tab" data-toggle="tab" href="#de" role="tab" aria-controls="de" aria-selected="true">Analysis</a> 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="saas-tab" data-toggle="tab" href="#saas" role="tab" aria-controls="saas" aria-selected="false">Planing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ma-tab" data-toggle="tab" href="#ma" role="tab" aria-controls="ma" aria-selected="false">Wireframe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="secure-tab" data-toggle="tab" href="#secure" role="tab" aria-controls="secure" aria-selected="false">Design</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="scale-tab" data-toggle="tab" href="#scale" role="tab" aria-controls="scale" aria-selected="false">Develop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monitor-tab" data-toggle="tab" href="#monitor" role="tab" aria-controls="monitor" aria-selected="false">Testing</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" id="testing-tab" data-toggle="tab" href="#testing" role="tab" aria-controls="testing" aria-selected="false">Launch</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" id="lounch-tab" data-toggle="tab" href="#lounch" role="tab" aria-controls="lounch" aria-selected="false">Support</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="tab-content software_service_tab_content">

                            <div class="tab-pane fade active show" id="de" role="tabpanel" aria-labelledby="de-tab">
                               <div class="row agency_featured_item mt-0 flex-row-reverse">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src="<?php  echo get_field("analysis_image"); ?>"  alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pr_70 pl_70">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/1.png" alt="">
                                <h3>ANALYSIS</h3>
                              <?php echo get_field("analysis_title"); ?>
                                <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="saas" role="tabpanel" aria-labelledby="saas-tab">
                               <div class="row agency_featured_item mt-0 agency_featured_item_two">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src="<?php echo get_field("planning_image"); ?>"  alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pl_100">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/2.png" alt="">
                                <h3>PLANNING</h3>
                               <?php echo get_field("planning_title"); ?>
                                <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="ma" role="tabpanel" aria-labelledby="ma-tab">
                                <div class="row agency_featured_item mt-0 flex-row-reverse">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src="<?php echo get_field("wire_frame_image"); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pr_70 pl_70">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/3.png" alt="">
                                <h3>WIREFRAME</h3>
                                <?php echo get_field("wire_frame_title"); ?>
                                <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="secure" role="tabpanel" aria-labelledby="secure-tab">
                               <div class="row agency_featured_item mt-0 agency_featured_item_two">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src="<?php echo get_field("design_image"); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pl_100">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/4.png" alt="">
                                <h3>DESIGN</h3>
                               <?php echo get_field("design_title"); ?>
                                <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                            </div>
                            <div class="tab-pane fade" id="scale" role="tabpanel" aria-labelledby="scale-tab">
                               <div class="row agency_featured_item mt-0 flex-row-reverse">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src="<?php echo get_field("develop_image"); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pr_70 pl_70">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/5.png" alt="">
                                <h3>DEVELOP</h3>
<?php echo get_field("develop_title"); ?>
                            
                            </div>
                        </div>
                    </div>
                            </div>
                    <div class="tab-pane fade" id="monitor" role="tabpanel" aria-labelledby="monitor-tab">
                        <div class="row agency_featured_item mt-0 agency_featured_item_two">
                            <div class="col-md-6">
                                <div class="agency_featured_img text-right">
                                    <img src="<?php echo get_field("testing_image"); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="agency_featured_content pl_100">
                                    <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                    <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/6.png" alt="">
                                    <h3>TESTING</h3>
                                   <?php echo get_field("testing_title"); ?>
                                    <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="tab-pane fade" id="testing" role="tabpanel" aria-labelledby="testing-tab">
                     <div class="row agency_featured_item mt-0 flex-row-reverse">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src=" <?php echo get_field("lunch_image"); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pr_70 pl_70">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/7.png" alt="">
                                <h3>LAUNCH</h3>
                                <?php echo get_field("lunch_title"); ?>
                            </div>
                        </div>
                    </div>
                </div>

                     <div class="tab-pane fade" id="lounch" role="tabpanel" aria-labelledby="lounch-tab">
                        <div class="row agency_featured_item mt-0 agency_featured_item_two">
                        <div class="col-md-6">
                            <div class="agency_featured_img text-right">
                                <img src="<?php echo get_field("support_imagfe"); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="agency_featured_content pl_100">
                                <div class="dot"><span class="dot1"></span><span class="dot2"></span></div>
                                <img class="number" src="<?php echo get_template_directory_uri(); ?>/img/process/8.png" alt="">
                                <h3>SUPPORT</h3>
                                <?php echo get_field("support_title"); ?>
                                <a href="#" class="icon mt_30"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
<!--div class="dot middle_dot"><span class="dot1"></span><span class="dot2"></span></div-->
<!--TAB CLOSE-->
    </div>
</section>
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
		
		<!-- <section class="seo_fact_area sec_pad">
            <div class="home_bubble">
                <div class="bubble b_one"></div>
                <div class="bubble b_three"></div>
                <div class="bubble b_four"></div>
                <div class="bubble b_six"></div>
                <div class="triangle b_eight" data-parallax='{"x": 120, "y": -10}'><img src="img/seo/triangle_one.png" alt=""></div>
            </div>
            <div class="container">
                <div class="seo_sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Over 1200+<br> completed work & Still counting.</h2>
                </div>
                <div class="seo_fact_info">
                    <div class="seo_fact_item">
                        <div class="text">
                            <div class="counter one">693</div>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="seo_fact_item">
                        <div class="text">
                            <div class="counter two">276</div>
                            <p>Projects</p>
                        </div>
                    </div>
                    <div class="seo_fact_item">
                        <div class="text">
                            <div class="counter three">102</div>
                            <p>SEO Winners</p>
                        </div>
                    </div>
                    <div class="seo_fact_item last">
                        <div class="text">
                            <div class="counter four">93</div>
                            <p>Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
	<!-- 	
		<div class="case_study_details_area_three sec_pad">
            <div class="container">
                <div class="row study_details_three">
                    <div class="col-lg-12">
                        <div class="study_details_content">
                            <h2>Company Methedology</h2>
                            <p>A bit of how's your father cuppa up the kyver cup of char I tomfoolery bobby morish cheeky brilliant say burke knees up, lost the plot hunky-dory only a quid geeza amongst spend a penny bog-standard haggle squiffy Jeffrey porkies he nicked it brown bread</p>
                        </div>
                    </div>
					<div class="container">
						<div class="row text-center client_methodolgy">
							<div class="col-md">
								<img src="images/1.png" alt="">
								<h6>Client</h6>
							</div>
							<div class="col-md">
								<img src="images/2.png" alt="">
								<h6>Project Analsis</h6>
							</div>
							<div class="col-md">
								<img src="images/3.png" alt="">
								<h6>Design & Development</h6>
							</div>
							<div class="col-md">
								<img src="images/4.png" alt="">
								<h6>Quality Control</h6>
							</div>
							<div class="col-md">
								<img src="images/5.png" alt="">
								<h6>Free Support 12 Months</h6>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div> -->
		
	<!-- testmonial -->
 <section class="agency_testimonial_area bg_color sec_pad">
        <div class="container">
            <h2 class="f_size_30 f_600 t_color3 l_height40 text-center mb_60">We've heard things like</h2>
            <div class="agency_testimonial_info">
                 <div class="testimonial_slider owl-carousel">
                         <?php
                $lastposts = get_posts([
                    'post_type' => 'testmonials',
                    'post_status' => 'publish',
                    'numberposts' => -1,
                    'order' => 'ASC'
                ]);
                if ($lastposts) {
                    foreach ($lastposts as $post) :
                        setup_postdata($post);
                        ?>
                 
                    <div class="testimonial_item text-center ">
                        <div class="author_description">
						    <?php
                                if (has_post_thumbnail()) {
                                    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                    ?>	<div class="customer_img"><img src="<?php echo $large_image_url[0]; ?>"></div> <?php } ?>
                            <div class="customer_title">
                                <h4 class="f_size_18"><?php echo the_title(); ?></h4>
                                <h6><?php echo get_field("job_description"); ?></h6>
                            </div>
                        </div>
                        <p><?php echo the_content(); ?></p>
						<div class="customer_logo"><img src="<?php echo get_field('logo'); ?>"></div>	
                    
                </div>
                 
                  <?php
                    endforeach;
                    wp_reset_postdata();
                  
                }
                ?>
                </div> 
            </div>
        </div>
    </section>
<!-- end  test monials -->

	
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
	
       
        <?php get_footer(); ?>