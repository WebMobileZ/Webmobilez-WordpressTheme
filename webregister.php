<?php 

  /* Template Name: Register
    */
  get_header();
  ?>
<style>
.developer_product_area {
  
    padding: 30px 0px !important;
	}
	.error{
		color:red;
	}
		.sign_info {
		padding:0px;
	}
	.breadcrumb_area {
  
    padding: 108px 0px 0px;
	}
</style>

<section class="breadcrumb_area">
    <!--  <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt=""> -->
    <div class="container">
        <div class="breadcrumb_content text-center">
            <h1 class="f_p f_700  w_color l_height50 mb_20">Signup / Signin <span class="t_color3">WebMobileZ</span>
            </h1>
            <p class="f_400 w_color f_size_16 l_height26">Your big opportunity may be right where you are now.</p>
        </div>
    </div>
</section>
<?php
	$error= '';
	$success = '';
 
    global $wpdb, $PasswordHash, $current_user, $user_ID;
    if(isset($_POST['task']) && $_POST['task'] == 'register' ) {
 
		
		$password1 = $wpdb->escape(trim($_POST['password1']));	
		$first_name = $wpdb->escape(trim($_POST['first_name']));
		$last_name = $wpdb->escape(trim($_POST['last_name']));
		$email = $wpdb->escape(trim($_POST['email']));
		$username = $wpdb->escape(trim($_POST['username']));
		
		if( $email == "" || $password1 == "" || $username == "" || $first_name == "" || $last_name == "") {
			$error= 'Please don\'t leave the required fields.';
		} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error= 'Invalid email address.';
			
		} else if(email_exists($email) ) {
			$error= 'Email already exist.';
		} else {
 
			$user_id = wp_insert_user( array ('first_name' => apply_filters('pre_user_first_name', $first_name), 'last_name' => apply_filters('pre_user_last_name', $last_name), 'user_pass' => apply_filters('pre_user_user_pass', $password1), 'user_login' => apply_filters('pre_user_user_login', $username), 'user_email' => apply_filters('pre_user_user_email', $email), 'role' => 'subscriber' ) );
			if( is_wp_error($user_id) ) {
				$error= 'User Name already Exist.';
			} else {
				do_action('user_register', $user_id);
				
				$success = 'You\'re successfully register';
				 wp_redirect(home_url('topics-java-full-stack') );	
			}
			
		}
		
	}
    ?>
<section class="developer_product_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-center">
                <div class="developer_product_content d_product_content_two offset-3">
 				<div id="message">
                   
                    
                    <?php 
                       if($error!= "") {
                            echo '<div class="alert alert-danger">'.$error."</div>";
                       }
                    ?>
                </div>
                    <ul class="nav nav-tabs develor_tab mb-30" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="ruby-tab" data-toggle="tab" href="#ruby" role="tab"
                                aria-controls="ruby" aria-selected="true"> Sign Up </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="curl-tab" data-toggle="tab" href="#curl" role="tab"
                                aria-controls="curl" aria-selected="false"> Sign In</a>
                        </li>
                    </ul>
                    <div class="tab-content developer_tab_content">
                        <div class="tab-pane fade active show" id="ruby" role="tabpanel" aria-labelledby="ruby-tab">
                            <section class="sign_in_area bg_color ">
                                <div class="container">
                                    <div class="sign_info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login_info">
													<form name="loginform" id="registerform" class="login-form sign-in-form"  method="post">
                                                   <div class="row">												   
														
														<div class="col-lg-6">
                                                        <div class="form-group text_box">
                                                            <label class="f_p text_c f_400">First Name</label>
                                                            <input type="text"  name="first_name" id="first_name" value="<?php echo isset($_POST['task'])?$first_name:''; ?>" placeholder="Your First name">
                                                        </div>
													   </div>
													   <div class="col-lg-6">
														<div class="form-group text_box">
                                                            <label class="f_p text_c f_400">Last Name</label>
                                                            <input type="text"  name="last_name" id="last_name"  value="<?php echo isset($_POST['task'])?$last_name:''; ?>" placeholder="Your Last name">
                                                        </div>
													   </div>
													   <div class="col-lg-12">
                                                        <div class="form-group text_box">
                                                            <label class="f_p text_c f_400">Email</label>
                                                            <input type="text" name="email" id="email" placeholder="Email *" value="<?php echo isset($_POST['task'])?$email:''; ?>" >
                                                        </div>
													   </div>
													   <div class="col-lg-6">
                                                        <div class="form-group text_box">
                                                            <label class="f_p text_c f_400">User Name</label>
                                                            <input type="text"  name="username" id="username"  placeholder="Username *"  value="<?php echo isset($_POST['task'])?$username:''; ?>" >
                                                        </div>
													   </div>
														   <div class="col-lg-6">
                                                        <div class="form-group text_box">
                                                            <label class="f_p text_c f_400">Password</label>
                                                            <input type="password"  name="password1" id="password1"  placeholder="******">
                                                        </div>
													   </div>
													   
                                                        <div class="d-flex justify-content-between align-items-center">
									<input type="submit" name="btnregister" id="wp-submitr"  value ="Register" class="btn_three" >
                        <input type="hidden" name="task" value="register" />
			
				<input type="hidden" name="redirect_to" value="<?php echo site_url('course'); ?>">
                                                          
                                                          <!--  <div class="social_text d-flex ">
                                                                <div class="lead-text">Don't have an account?</div>
                                                            </div> -->
                                                        </div>
													   </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="curl" role="tabpanel" aria-labelledby="curl-tab">
                            <section class="sign_in_area bg_color ">
                                <div class="container">
                                    <div class="sign_info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login_info">
                                                	<?php
if (is_user_logged_in()) {               
  //  echo '<div class="logout"> <p>Hello!<div class="logout_user"> You are logged in and can proceed to the <a href="http://example.com/seminar">Online Seminar</a>.</div></p><br /><p><a id="wp-submit" class="logout" href="', wp_logout_url(), '" title="Logout">Logout</a></p></div>';
   echo  '<a href="'. wp_logout_url() .'">Log Out</a>';
} else { 
                  // Arguments for the wp_login_form()
                  
                  $args = array(
                      'echo'           => true,
                      'remember'       => false,
                      'redirect' => home_url('share-experience'), 
                 //      'redirect' => current_user_can('editor')?admin_url:home_url('share-experience'), 
                      'form_id'        => 'sign-in-form',
					
                      'id_username'    => 'user_login',
                      'id_password'    => 'user_pass',
                      'id_remember'    => 'rememberme',
                      'id_submit'      => 'wp-submit',
                      'label_username' => __( 'Email or User Name' ),
                      'label_password' => __( 'Password' ),
                      'label_log_in'   => __( 'Log In' ),
                      'value_username' => '',
                     
                  );
                  
                  ?>
                 <?php wp_login_form($args); ?>
                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
 var element = document.getElementsByClassName("login-username");
  element[0].classList.add("text_box");
	 var element2 = document.getElementsByClassName("login-password");
  element2[0].classList.add("text_box");
		 var element3 = document.getElementById("wp-submit");
  element3.classList.add("btn_three");

</script>

<?php 
  
  get_footer();
  ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script>	
		$( document ).ready( function () {
		
 	   jQuery('#user_login').attr('placeholder', 'Email or Username');
    jQuery('#user_pass').attr('placeholder', 'Password');	
  $("#curl-tab").click(function(){
	$("#message").html('');
  });
			 $("#ruby-tab").click(function(){
	 	$("#message").html('');
  });
			$( "#registerform" ).validate( {
				rules: {
					first_name: "required",
					last_name: "required",
					username: {
						required: true,
						minlength: 4
					},
					password1: {
						required: true,
						minlength: 5
					},
					
					email: {
						required: true,
						email: true
					},
				
				},
				messages: {
					first_name: "Please enter your firstname",
					last_name: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 4 characters"
					},
					password1: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					
					email: "Please enter a valid email address",
					
				},
				errorElement: "span",
				
				
				
			} );
				$( "#sign-in-form" ).validate( {
				rules: {
			
					log: {
						required: true,
					
					},
					pwd: {
						required: true,
						minlength: 5
					},
					
				
				},
				messages: {
					log: "Please enter your username or Email",
					
					pwd: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					
					
					
				},
				errorElement: "span",
				
				
				
			} );
		} );
	</script>