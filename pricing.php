 
  <?php 

  /* Template Name: Pricing
    */
  get_header();
  ?>

      <section class="breadcrumb_area">
           
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Our pricing</h1>
                    <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
                </div>
            </div>
        </section>
       <section class="pricing_area_two sec_pad">
            <div class="container custom_container p0">
                
                <div class="tab-content price_content price_content_two">
                        <div class="row">
                            	<?php	$args= array(
					"post_type" => "subscribe",
			 'order' => 'ASC',
					
						
					);
					$loop=new WP_Query($args);
					if($loop->have_posts()){
					while($loop->have_posts()): $loop->the_post();
						$active="";
						if(!empty(get_field("active")[0]))
						{
							$active=get_field("active")[0]." over";
						}
					 
					?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="price_item">
                                    <img src="img/price/one.png" alt="">
                                    <h5 class="f_p f_size_20 f_600 t_color2 mt_30"><?php echo the_title(); ?></h5>
                                    <p><?php the_content(); ?></p>
                                    <div class="price f_700 f_size_40 t_color2">$<?php echo get_field("price"); ?><sub class="f_size_16 f_400">/ mo</sub></div>
                                    <ul class="list-unstyled p_list">
                                        <?php $i=0; $coptions=get_field("subscribe_features"); ?>
		   <?php foreach($coptions as $values){ if(!empty($values)) { ?>
						
						 <li><i class="ti-check"></i><?php echo $values; ?></li>
							<?php } $i++; } ?>
                                       
                                    
                                       
                                    </ul>
                                    <?php $price=get_field("price"); echo do_shortcode('[wp_paypal button="subscribe" class="price_btn btn_hover" name="Company" amount="'.$price.'" recurrence="1" period="M" src="1"]'); ?>
                                   
                                </div>
                            </div>
                        	<!-- Price col of the page end -->
			<?php endwhile; } ?>
                         
                        </div>
                        </div>
                    </div>
                  </div>
                  </section>
        
<?php get_footer(); ?>