<?php
  /* Template Name:  Thank 
    */

get_header();
?>
<style>
    .blog_content .post_date h2 {

    color: #d94c27;

}
h5{
    color: #d94c27 !important;
}
</style>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylenew23.css">
    
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/landingpagenew24.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsivenew22.css">
	<style>
	.wpcf7-response-output{
		color:black;
	}
	span.wpcf7-not-valid-tip {
		margin-top:0em !important;
	}
	span.wpcf7-not-valid-tip{ display: inline-block;
float: left;}
	.wpcf7-form div.wpcf7-validation-errors{ color: #ff0000 !important}
	.wpcf7-form select.form-control:not([size]):not([multiple]) {
    height: auto !important;
}
	@media screen and (max-width: 900px) and (min-width: 320px) { 
		#tidio-chat {
    display: none;
}
 .wpcf7-form.invalid .form-control {
    padding: auto !important;
  }
}
		.paypal{
			display:none;
		}
</style>
	<style>

    .banner_area {
    min-height: 500px;
    background: -webkit-linear-gradient(130deg, rgba(13, 13, 13, 0.8) 0%, rgba(13, 13, 13, 0.8) 100%), url(images/banner3.png) no-repeat scroll center 0/cover;
    background: -o-linear-gradient(130deg, rgba(13, 13, 13, 0.8) 0%, rgba(13, 13, 13, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/images/banner3.png) no-repeat scroll center 0/cover;
    background: linear-gradient(-40deg, rgba(13, 13, 13, 0.8) 0%, rgba(13, 13, 13, 0.8) 100%), url(<?php echo get_template_directory_uri(); ?>/images/banner3.png) no-repeat scroll center 0/cover;
    background-attachment: fixed;
    text-align: center;
    position: relative;
}
    /*
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 0px;
    z-index: 9;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    -webkit-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
*/

.banner_area{
    color: #fff;
}
.callbackmenu.menu > .nav-item {
    position: relative;
    padding-bottom: 15px;
    padding-top: 15px;
}
.textColor{
  color:#fff;
}
.inlineContent{
list-style-type: none;display: inline-block;
}
.text-webmobilezO{
  color:#d94c27;
}
.text-webmobilezW{
    font-size: 30px;
  color:#fff;
}
.list-check li i {
    color: #d94c27;
    font-size: 16px;
    padding-right: 5px;
}
.h_footer_dark {
    background: #010e28;
    padding: 100px 0px 120px;
    }
    .list-check li{
        position: relative;
        padding-left: 20px;
        font-weight: 400;
    }
    .list-check li::before {
    content: "\f058";
    position: absolute;
    left: 0;
    top: 0;
    font-family: 'Font Awesome 5 Free';
    color: #d94c27;
}
    .mobilenumber{
            display: none;
        color: #000000;
        font-weight: 400;
        font-size: 13px;
        }
    
    @media (max-width: 800px){
        .mobilenumber{
            display: inline-block;
        }
        .bannercont{
            display: none;
        }
        .md-form i{
            line-height: 23px;
        }
    }
  
        .agency_banner_btn{
                background: #d94c27;
                border: 1px solid #d94c27;
        }
    .agency_banner_btn:hover {
    color: #d94c27;
}
.call-back h2, .call-back h3 {
    color: #fff;
}
.call-back ul li a{
    color:#d94c27;
}
.about_btn:hover {
    color: #d94c27;
    background: #fff;
      transform: scale(1.2);
}
.pr_70 {
    padding-right: 63px;
}
.t_color3W {
    color: #fff;
}

.t_color3 {
    color: #000;
}
.s_pricing-item .tag_label{
       background: #d94c27 !important; 
}
.s_pricing-item .tag_label:before {
  
    border-top: 20px solid #d94c27 !important;
    border-bottom: 20px solid #d94c27 !important;
}
.s_pricing-item .strikeprice {
    color: #051441;
    padding: 18px 0px 40px;
    
}
.seo_call_action_text h2 {
    font-size: 34px;
}
    </style>
<section class="breadcrumb_area">
          <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
            <div class="container">
                <div class="breadcrumb_content text-center">
                     
					<div class="alert alert-success" role="alert">
  Thank You! Click on download button you will get Training Module
</div>
	<div class="alert alert-primary" role="alert">
	    <?php  the_content(); ?>
	    </div>
<button onclick="goBack()">Go Back</button>
                </div>
            </div>
        </section>


<script>
function goBack() {
	location.href = "https://webmobilez.com/blog/";
 // window.history.back();
}
</script>
	


<?php
get_footer();
