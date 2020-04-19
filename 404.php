<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<style>
    .screen-reader-text{
        color:#fff;
    }
</style>
    <section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                   <div class="error-404 not-found">
				<header class="page-header">
					<h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20"><?php _e( 'Oops! That page can&rsquo;t be found.', 'Webmobilez' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="f_400 w_color f_size_16 l_height26"><?php _e( 'It looks like nothing was found at this location. ', 'Webmobilez' ); ?></p>
    				
				</div><!-- .page-content -->
			</div><!-- .error-404 -->
                </div>
            </div>
        </section>

<?php
get_footer();
