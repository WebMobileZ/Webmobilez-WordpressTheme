<?php

  /* Template Name: Discussion
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


</style>
<section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><?php the_title(); ?> </h1>                  
                </div>
            </div>
        </section>
       <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
         
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
 
            // End of the loop.
        endwhile;
        ?>
 
    </main><!-- .site-main -->
 
  
 
</div><!-- .content-area -->
<?php get_footer(); ?>
   