  <?php 

 
  get_header();
  ?>  
   <section class="breadcrumb_area">
           <!-- <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><span class="t_color4">Web</span><span class="t_color3">MobileZ</span> Careers</h1>
             
                </div>
            </div>
        </section>
    <section class="job_apply_area sec_pad bg_color">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-4 pl_70">
                        <div class="job_info">
                            <div class="info_head">
                                <i class="ti-receipt"></i>
                                <h6 class="f_p f_600 f_size_18 t_color3">Job Detail</h6>
                            </div>
                            <div class="info_item">
                                <i class="ti-ruler-pencil"></i>
                                <h6>Department</h6>
								<p><?php echo get_the_title();  ?></p>
                            </div>
                            <div class="info_item">
                                <i class="ti-location-pin"></i>
                                <h6>Location</h6>
                                <p><?php echo get_field("location"); ?></p>
                            </div>
                            <div class="info_item">
                                <i class="ti-layout-tab-window"></i>
                                <h6>Job Type:</h6>
                                <p><?php echo get_field("job_type"); ?></p>
                            </div>
                         <!--   <div class="info_item">
                                <i class="ti-pencil-alt"></i>
                                <h6>Qualifications</h6>
                                <p><?php// echo get_field("qualifications"); ?></p>
                            </div> -->
                           <!-- <div class="info_item">
                                <i class="ti-cup"></i>
                                <h6>Experience</h6>
                                <p><?php// echo get_field("experience"); ?></p>
                            </div>
                            <div class="info_item">
                                <i class="ti-ruler-pencil"></i>
                                <h6>Offered Salary</h6>
                                <p><?php// echo get_field("offered_salary"); ?></p>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="details_content">
                            <div class="job_deatails_content mb_70">
<h2><?php echo get_the_title(); ?></h2>
                                <h3 class="f_p f_size_22 f_500 t_color3 mb_20">Job Requirements</h3>
                                <p class="f_400 f_size_15"><?php echo get_field("job_requirements"); ?></p>
                            </div>
         
                       
                        </div>
                        <div class="job_apply">
                            <div class="sec_title mb_20 mt_10">
                                <h3 class="f_p f_size_22 f_600 t_color3 mb_20 text-center">Apply Now</h3>
                              </div>
                     <div class="message">
						 
							</div>
                         <?php echo do_shortcode('[contact-form-7 id="563" title="Resumes"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
  <?php get_footer(); ?>