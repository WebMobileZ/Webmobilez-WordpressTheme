<?php 

  /* Template Name: Questions
    */
  

get_header();
if( !is_user_logged_in() ) {
    wp_redirect('/wp-login.php');
    //auth_redirect();
    exit;
}
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
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><?php the_title(); ?> </h1>   
					<a href="<?php echo site_url('topics-java-full-stack'); ?>" class="w_color" >All Topics &nbsp;</a> <span class="w_color" >> &nbsp;</span><a href="#" class="w_color"><?php the_title(); ?></a>
                </div>
            </div>
        </section>
	    <section class="contact_info_area sec_pad bg_color">
            <div class="container">
               
                  
<section class="faq_area bg_color sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pr_50">
                        <div class="faq_tab">
                            <h4 class="f_p t_color3 f_600 f_size_22 mb_40">Interview Questions</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
								 
								
								<?php 
			 $args = array(
                                               'taxonomy' => 'questionstype',
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
                    <div class="col-lg-7">
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
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20"><?= $cat->name ?> <?php /*echo get_field('duration', $cat->taxonomy.'_'.$cat->term_id); */ ?> Interview Questions</h3>
                                <div id="accordion<?= $j ?>">
                                    <?php 


                                                                      $args = array('post_type' => 'questions','posts_per_page' => -1 ,'order'   => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'questionstype',
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
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?= $k ?>" aria-expanded="false" aria-controls="collapseOne<?= $k ?>">
                                                    <?php echo get_the_title();?><i class="ti-plus"></i><i class="ti-minus"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne<?= $k ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion<?= $j ?>">
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
						
                
                   
              
            </div>
        </section>

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


	<script>
		 jQuery(document).ready(function(){ 
  jQuery('.phone_us').mask('(000) 000-0000');
  jQuery('.phone_us1').mask('(000) 000-0000'); 
});
	  jQuery(function () {
      jQuery('.alpha').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
 
 jQuery(".wpcf7-submit").click(function(){
  setTimeout(function(){
  jQuery('.bd-example-modal-l').modal('hide')
}, 4000);
});
</script>
 <script  src="<?php echo get_template_directory_uri(); ?>/js/zepto.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146520629-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146520629-1');
onClick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Send', eventLabel: 'Send', eventValue: 1});"
</script>
<script>
	function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-713254219/QnqYCJHhq6kBEMvKjdQC',
      'event_callback': callback
  });
  return false;
}
var wpcf7Elm = document.querySelector( '.wpcf7' );
 
wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
	console.log(event)
	console.log(event.detail.apiResponse.message);
	if(event.detail.apiResponse.status=="mail_sent")
	{
	    gtag_report_conversion();
ga( 'send', 'event', 'Contact Form', 'submit' );
			message='<div class="alert alert-success">'+event.detail.apiResponse.message+'</div>';
			$(".message").html(message);
		//gtag_report_conversion();
		}
	if(event.detail.apiResponse.status!="mail_sent"){
			message='<div class="alert alert-danger">'+event.detail.apiResponse.message+'</div>';
			$(".message").html(message);
		}
   $(".wpcf7-response-output").html("");
}, false );</script>
<script src="//code.tidio.co/8yeykezdvo3adbxs5dsyov4zpiblazvo.js"></script>
</body>
</html>

