<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link href="<?php echo base_url();?>/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/main.js"></script>
</head>
<body class="<?php echo $class; ?>">
		<div class="container_full_width">
			<div class="main_top_bar">
				<h3>Admin Dashboard</h3>
			</div>
			<div class="ledt_sidebar">
					<div class="service">
						<h4>Add Services</h4>
						<ul>
							<li><a href="<?php echo base_url();?>mycon/addservice">Create New Service</a></li>
							<li><a href="<?php echo base_url();?>mycon/childservices">Add Child Services</a></li>
						</ul>
					</div>
			</div>
			<div class="right_sidebar">
						<div class="service_form">
							<form action="<?php echo base_url();?>mycon/insertservice_childservice1" method="post" id="insertservice">

										<select name="main_service">
											<option>Select Service</option>
											<?php 

													if($ss->num_rows() > 0)
													{
														foreach($ss->result() as $val)
														{
															echo '<option value="'.$val->id.'">'.$val->services.'</option>';
														}
													}
													else
													{
														echo 0;
													}
													?>
										</select>
										<div class="child_services">
											<input type="text" placeholder="Enter services" class="chil_ser1" name="cservice">
										</div>
										<input type="submit" name="child_service_inser" value="Submit">
								</form>
						</div>
			</div>
		</div>
</body>
</html>