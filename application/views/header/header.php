<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link href="<?php echo base_url();?>/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
</head>
<header>
	<div class="container-full-width">
		<div class="top-bar">
				<div class="mail">
						<span><i class="fa fa-envelope"></i>&ensp;info@mechnics.com</span> &nbsp;&nbsp;|&ensp;
						<span><i class="fa fa-mobile"></i>&ensp;1800123568</span>
				</div>
				<div class="login_social">
					<ul class="social">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</li>
					</ul>
					<ul class="login">
						<li><a href="#">Become a Professional</a></li>
					</ul>
				</div>
		</div>
	</div>
	<div class="container-full-width">
		<div class="top-bar-menu">
			<div class="logo">	
				<img src="<?php echo base_url();?>/images/26f192cc-c463-4060-8356-72e3de0647b1.png">
			</div>
			<div class="search">
				<input type="search_mech" class="search_inp" placeholder="Enter the Services">
				<button type="button" name="search" id="search"><i class="fa fa-search"></i></button>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Our Team</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Portfolio</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
	</div>
	<div class="container-full-width">
		<div class="main_banner_section">
		<div class="main_banner">
			<img src="<?php echo base_url();?>/images/aircondition-banner.jpg" width="100%">
		</div>
		<div class="search_form_banner">
			<div class="searbutt">
				<div class="main_sear_bu">
						<span id="locaa">Bhubaneswar</span>&nbsp;<i class="fa fa-chevron-down"></i>
				</div>
				<div class="locations" id="locaa">
							<ul>
								<li>
								<span>Bhubaneswar</span>
								</li>
								<li>
								<span>cuttack</span>
								</li>
							</ul>
						</div>
			</div>
			<div class="search_text">
				<input type="text" name="search_fun" placeholder="Search for a service">
				<span>Ex:- Air Conditioner, Refrigrator , Water Purifier</span>
			</div>
		</div>
		</div>
	</div>
</header>