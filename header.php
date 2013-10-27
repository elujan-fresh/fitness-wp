<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
	<head>
	
		<meta http-equv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/vendor/bootstrap.min.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/vendor/bootstrap-responsive.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/vendor/font-awesome/css/font-awesome.min.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/vendor/carrousell.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media768.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media685.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media600.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media568.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media480.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media380.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media320.css" media="all">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media240.css" media="all">
		<!--<link href="css/jquery.bxslider.css" rel="stylesheet" />-->
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/vendor/bootstrap.min.js"></script>
		<!-- include jQuery + carouFredSel plugin -->
		<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri();?>/js/vendor/jquery.carouFredSel-6.2.1-packed.js"></script>


		<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	</head>
	<body>
		<div class="header" >
            <div id="header-lines">
            	<div class="container-center">
					<a href="index.php" >
						<img src="<?php echo get_template_directory_uri();?>/img/header/logo.png" id="header-logo"/>
					</a>
                  <p id="member-login">
                        MEMBER LOGIN
                  </p>
				  <div id="container-form-login">
					<form id="form-login">
						<div id="container-form-login-top">
							<p class="orange" id="form-login-title">Membership Website Login<p>
							
								<p class="center"><input type="text" class="form-input" placeholder="EMAIL ADDRESS" ></p>
								<p class="center"><input type="text" class="form-input" placeholder="PASSWORD" id="form-login-password"></p>
								<p class="left" id="login-info1">
									<input type="checkbox" name="remember" id="remember_me" value="y"/>
									<span id="remember-me"class="orange">Remember Me</span><br />
									<span id="forgot"><a href="" class="orange"><u>Forget Password?</u></a></span>
									<input type="submit" class="form-submit" value="LOGIN">
								</p>
								
								<p class="center">
									<input type="submit" class="form-submit-register" value="">
								</p>
							

						</div>
						<div id="container-form-login-bottom"></div>
					</form>
				  </div>
                </div>
            </div>
            
			
			<div id="menu">
				<div class="container-center">
					<div id="menu-items">
						<table id="menu-desktop" class="visible-desktop hidden-phone hidden-tablet hidden-1024">
							<tr>
								<td class="ubuntu-font"><a href="about.php" >ABOUT </a></td>
								<td class="ubuntu-font"><a href="training.php">TRAINING</a></td>
								<td class="ubuntu-font"><a href="coaching.php">COACHING</a></td>
								<td class="ubuntu-font"><a href="testimonials.php">TESTIMONIALS </a></td>
								<td class="ubuntu-font"><a href="press.php">PRESS </a></td>
								<td class="ubuntu-font"><a href="videos.php">VIDEOS</a></td>
								<td class="ubuntu-font"><a href="shop.php">SHOP </a></td>
								<td class="ubuntu-font"><a href="blog.php">BLOG </a></td>
								<td class="ubuntu-font"><a href="contact.php">CONTACT </a></td>
							</tr>
						</table>
						<table id="menu-desktop" class="visible-1024">
							<tr>
								<td class="ubuntu-font"><a href="about.php" >ABOUT </a></td>
								<td class="ubuntu-font"><a href="training.php">TRAINING</a></td>
								<td class="ubuntu-font"><a href="coaching.php">COACHING</a></td>
								<td class="ubuntu-font"><a href="testimonials.php">TESTIMONIALS </a></td>
								<td class="ubuntu-font"><a href="press.php">PRESS </a></td>
							</tr>
							<tr>
								<td colspan="2" class="bold center"><a href="videos.php">VIDEOS</a></td>
								<td class="ubuntu-font center"><a href="shop.php">SHOP </a></td>
								<td class="ubuntu-font center"><a href="blog.php">BLOG </a></td>
								<td class="ubuntu-font center"><a href="contact.php">CONTACT </a></td>
							</tr>
						</table>
						<ul class="nav pull-right visible-phone visible-tablet hidden-desktop" id="menu-phone">
				            <li class="dropdown">
				            	<button data-toggle="dropdown" id="menu-button">
				            		<span class="icon-reorder"></span>
				            	</button>
				              <ul class="dropdown-menu">
				                  <li><a href="about.php">ABOUT</a></li>
				                  <li><a href="training.php">TRAINING</a></li>
				                  <li><a href="coaching.php">COACHING</a></li>
				                  <li><a href="testimonials.php">TESTIMONIALS</a></li>
				                  <li><a href="press.php">PRESS</a></li>
				                  <li><a href="videos.php">VIDEOS</a></li>
				                  <li><a href="shop.php">SHOP</a></li>
				                  <li><a href="blog.php">BLOG</a></li>
				                  <li><a href="contact.php">CONTACT</a></li>             
				              </ul>
				            </li>
				          </ul> 
					</div>
					
				</div>

			</div>

		</div>

