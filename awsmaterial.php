<?php 

  /* Template Name: AWS Material
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
	.faq_content .tab-pane .card .card-header .btn.collapsed {
    color: #d94c27;
}
	.faq_content .tab-pane .card .card-header .btn {

  font: 500 26px/26px "Poppins", sans-serif;
	}
		.anyClass {
  height:600px;
  overflow-y: scroll;
}
.breadcrumb_area{
   padding-bottom:0;
  
}
	.anyClass {

    overflow: auto;
    position: -webkit-sticky;
    position: sticky;
    top: 5%;
}
</style>
 <section class="breadcrumb_area">
        
            <div class="container-fluid">
                <div class="breadcrumb_content text-center">
                  
                </div>
            </div>
        </section> 
	  
               
                  
<section class="faq_area bg_color ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-lg-3  anyClass">
                        <div class="faq_tab">
                            <h4 class="f_p t_color3 f_600 f_size_22 mb_40">AWS Course</h4>
                            	<a href="<?php echo site_url('topics-java-full-stack'); ?>" class="" >Back</a>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
								 
								
								<?php 
			 $args = array(
                                               'taxonomy' => 'awstype',
                                           'order' => 'ASC',   // Orders the list by post count
                                     'orderby'        => 'term_id'
          
                                           );

                                   $cats = get_categories($args);
						if ( $cats ) {
							$i=1;
    foreach ( $cats as $post ) :
      $string = strtolower(preg_replace('/\s+/', '', $post->name));
						
								$subtitle=strtolower(substr($string,0,4));
							
								?>
					
                                <li class="nav-item">
                                    <a class="nav-link <?php if($i==1) echo 'active'; ?>" id=<?= $subtitle ?>"-tab" data-toggle="tab" href="#<?= $subtitle ?>" role="tab" aria-controls="<?= $subtitle ?>" aria-selected="true"><?php echo $post->name; ?></a>
                                </li>
                           <?php  $i++;    endforeach; 
  
}
						?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 col-lg-9 ">
                        <div class="tab-content faq_content" id="myTabContent">
                            <?php   $j=1;    foreach($cats as $cat) {
                                   
                                    if($j==1)
                                    {
                                        $active="show active";
                                    }else
                                    {
                                         $active="";
                                    }
                                 $string = strtolower(preg_replace('/\s+/', '', $cat->name));
                                 	$subtitle=strtolower(substr($string,0,4));
                                ?>
                            
                            <div class="tab-pane fade <?= $active ?>" id="<?= $subtitle ?>" role="tabpanel" aria-labelledby="<?= $subtitle ?>-tab">
                                <!-- <h3 class="f_p f_size_22 f_500 t_color3 mb_20"><?= $cat->name ?> <?php /*echo get_field('duration', $cat->taxonomy.'_'.$cat->term_id); */ ?> Angular Course </h3> -->
                                <div id="accordion<?= $cat->term_id ?>">
                                    <?php 


             $args = array('post_type' => 'awsmaterial','posts_per_page' => -1 ,'order'   => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'awstype',
                                                'field' => 'slug',
                                                'terms' => $cat->slug,
                                            ),
                                        ),
                                     );

                                     $loop = new WP_Query($args);
                                     if($loop->have_posts()) {
                                     
                                        $k=1;
                                        while($loop->have_posts()) : $loop->the_post(); 
                              
                                            ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?= get_the_ID(); ?>" aria-expanded="false" aria-controls="collapseOne<?= get_the_ID(); ?>">
                                                    
												<?php echo get_the_title();?>		
													<i class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne<?= get_the_ID(); ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion<?= $cat->term_id ?>">
                                            <div class="card-body">
                                                <?php  the_content();?>
                                            </div>
                                        </div>
                                    </div>
                                       <?php $k++;
        endwhile;
     } ?>
                                </div>
                            </div>
                             <?php $j++; }  wp_reset_postdata(); ?>

                            
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
						
                
                   
              
           

<?php wp_footer(); ?>
   
 <?php get_footer(); ?>