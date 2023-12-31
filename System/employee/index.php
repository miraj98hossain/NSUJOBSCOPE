<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Nsu job Scopes</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="../images/ico/NSU_favicon3.png">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">
	
</head>
  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					
					<a class="navbar-brand branding" href="#">NSU Job Scopes</a>
					
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="../">Home</a>
								
							</li>
							
							<li>
								<a href="../job-list.php">Job List</a>

							</li>
							
							<li>
								<a href="../employers.php">Employers</a>
							</li>
							
							<li>
								<a href="../employees.php">Employees</a>
							</li>
							
							<li>
								<a href="../contact.php">Contact Us</a>
							</li>

						</ul>
				
					</div>


				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">NsujobScopes</a></li>
						<li><span>Profile</span></li>
					</ol>
					
				</div>
				
			</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>

									<?php
										if($is_verified==0){

										}else{?>
									
									<div class="admin-user-action text-center">
									
										<a target="" href="mycv.php" class="btn btn-primary btn-sm btn-inverse">View my CV</a>
										
									</div>
									<?php
										}
									?>
									
									<ul class="admin-user-menu clearfix">
										<li  class="active">
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>
										<?php
										if($is_verified==0){

										}else{?>
                                         

										 <li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Professional Qualifications</a>
										</li>
										<li>
											<a href="language.php"><i class="fa fa-language"></i> Language Proficiency</a>
										</li>
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Training & Workshop</a>
										</li>

										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Referees</a>
										</li>
										<li>
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Academic Qualifications</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Working Experience</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Other Attachments</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Jobs</a>
										</li>

										<?php
										}
										?>

										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
							
								<div class="admin-content-wrapper">

									<div class="admin-section-title">
									
										<h2>Profile</h2>
										<p>Your last loged-in: <?php echo "$mylogin"; ?></p>
										
									</div>

									<?php
										if($is_verified==0){
											echo"

											<p><strong>Please Verify Your Email To Update and Use Other features</strong></p>

											
											";
										}else{?>

<form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">
								
								<div class="row gap-20">
								<?php require 'constants/check_reply.php'; ?>

									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>First Name</label>
											<input name="fname" required type="text" class="form-control" value="<?php echo "$myfname"; ?>" placeholder="Enter your first name">
										</div>
										
									</div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Last Name</label>
											<input name="lname" required type="text" class="form-control" value="<?php echo "$mylname"; ?>" placeholder="Enter your last name">
										</div>
										
									</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Born</label>
											<div class="row gap-5">
												<div class="col-xs-3 col-sm-3">
													<select name="date" required class="selectpicker form-control" data-live-search="false">
														<option disabled value="">day</option>
														 <?php 
														  $x = 1; 

														  while($x <= 31) {
							 
														  if ($x < 10) {
														  $x = "0$x";
														  print '<option '; if ($mydate == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
														  }else{
														  print '<option '; if ($mydate == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
														  }
														  $x++;
														   } 
														 ?>
													</select>
												</div>
												<div class="col-xs-5 col-sm-5">
													<select name="month" required class="selectpicker form-control" data-live-search="false">
														 <?php 
														  $x = 1; 

														  while($x <= 12) {
							 
														  if ($x < 10) {
														  $x = "0$x";
														  print '<option '; if ($mymonth == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
														  }else{
														  print '<option '; if ($mymonth == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
														  }
														  $x++;
														   } 
														 ?>
													</select>
												</div>
												<div class="col-xs-4 col-sm-4">
													<select name="year" class="selectpicker form-control" data-live-search="false">
													<?php 
													 $x = date('Y'); 
													 $yr = 60;
													 $y2 = $x - $yr;
													 while($x > $y2) {
							 
													 print '<option '; if ($myyear == $x ) { print ' selected '; } print ' value="'.$x.'">'.$x.'</option>';
													 $x = $x - 1;
													  } 
													  ?>
													</select>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="Enter your email address">
										</div>
										
									</div>
									
									<div class="clear"></div>

									<div class="col-sm-6 col-md-4">
													
													<div class="form-group">
														<label>Education Level</label>
														<input value="<?php echo "$myedu"; ?>" name="education" type="text" required class="form-control" placeholder="Eg: Diploma, Degree...etc">
													</div>
												
											</div>
											
											<div class="col-sm-6 col-md-4">
													
													<div class="form-group">
														<label>Title</label>
														<input value="<?php echo "$mytitle"; ?>" name="title" required type="text" class="form-control mb-15" placeholder="Eg: Computer Science, IT...etc">
													</div>
												
											</div>
									
									<div class="clear"></div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Gender</label>
											<select name="gender" required class="selectpicker show-tick form-control" data-live-search="false">
												<option disabled value="">Select</option>
												<option <?php if ($mygender == "Male") { print ' selected '; } ?> value="Male">Male</option>
												<option <?php if ($mygender == "Female") { print ' selected '; } ?>value="Female">Female</option>
											</select>
										</div>
										
									</div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>City/town</label>
											<input name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>">
										</div>
										
									</div>
									
									<div class="clear"></div>
									
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Street</label>
											<input name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>">
										</div>
										
									</div>
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Zip Code</label>
											<input name="zip" required type="text" class="form-control" value="<?php echo "$myzip"; ?>">
										</div>
										
									</div>

									<div class="clear"></div>
									

									
									<div class="col-sm-6 col-md-4">
									

										
									</div>
									
									<div class="col-sm-6 col-md-4">
									
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" name="phone" required class="form-control" value="<?php echo "$myphone"; ?>">
										</div>
										
									</div>

									


									<div class="clear"></div>
									
									<div class="col-sm-12 col-md-12">
									
										<div class="form-group bootstrap3-wysihtml5-wrapper">
											<label>About me</label>
											<textarea name="about" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your short description ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
										</div>
										
									</div>
									
									<div class="clear"></div>

									<div class="col-sm-12 mt-10">
										<button type="submit" class="btn btn-primary">Update</button>
										<button type="reset" class="btn btn-primary btn-inverse">Cancel</button>
									</div>

								</div>
								
							</form><br>
							
							<form action="app/new-dp.php" method="POST" enctype="multipart/form-data">
							<div class="row gap-20">
							<div class="col-sm-12 col-md-12">
									
							<div class="form-group bootstrap3-wysihtml5-wrapper">
							<label>Display Image</label>
							<input accept="image/*" type="file" name="image"  required >
							</div>
										
							</div>
									
							<div class="clear"></div>

							<div class="col-sm-12 mt-10">
							<button type="submit" class="btn btn-primary">Update</button>
							<?php 
							if ($myavatar == null) {

							}else{
							?><a onclick = "return confirm('Are you sure you want to delete your avatar ?')" class="btn btn-primary btn-inverse" href="app/drop-dp.php">Delete</a> <?php
							}
							?>
							</div>
							</div>
							</form>


                                        <?php
										}
										?>
									

									
								</div>

							</div>
							
						</div>

					</div>

				</div>
			
			</div>

			
			
		</div>

	</div>

 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>


<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>


</body>



</html>