<?php

require_once("mysql_db.php");
    
	$fname = $_REQUEST['fname'];
	$email = $_REQUEST['email'];
    $password = mysql_escape_string($_REQUEST['password']);
	$msg="";
	$msg1="";
	$msg2="";
	$msg3="";
	
	$query = mysql_query("SELECT * FROM `login` WHERE email_id='$email' AND acctype='Student'");
		$nn = mysql_num_rows($query);
	if($nn == 0 && !preg_match('/^ *$/', $fname))
	{
		
		if(getimagesize($_FILES['image']['tmp_name']) == false)
		{
			$msg2 = 'Please Select An Image!!!';
		}
		else
		{
            $sql1 ="INSERT INTO `login` (email_id, pass, acctype) 
			VALUES ('$email', '$password', 'Student')";
		    mysql_query($sql1);

			$image = addslashes($_FILES['image']['tmp_name']);
			$name = addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
		    $gender = $_REQUEST['gender'];
		    $education = $_REQUEST['education'];
		    $address = $_REQUEST['address'];
		    $date = date("Y-m-d");
			
			$sql = "INSERT INTO `student_info`(`fname`, `gender`, `education`, `address`, `email`, `idcreate_date`, `name`, `image`) 
			VALUES ('$fname','$gender','$education','$address','$email','$date','$name','$image')";
				if(!mysql_query($sql))
				{
					$msg3= 'Error In Student';
				}
				else
				{
					$msg= 'Registraion Successfull!!!';
				}
		}
	}
	else{
		$msg1= 'This Email ID Already Exist!!!';
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login|Registration</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		<link rel="stylesheet" href="includes/css/styles.css">
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>

		<div class="container" id="main">

			<div class="navbar navbar-fixed-top">
				<div class="container">
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>

					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
						    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">School/College<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li class="dropdown-header">School(All Subject)</li>
									<li><a href="#">Kindergarten</a></li>
									<li><a href="#">1st</a></li>
									<li><a href="#">2nd</a></li>
									<li><a href="#">3rd</a></li>
									<li><a href="#">4th</a></li>
									<li><a href="#">5th</a></li>
									<li><a href="#">6th</a></li>
									<li><a href="#">7th</a></li>
									<li><a href="#">8th</a></li>
									<li><a href="#">9th/10th</a></li>
									<li><a href="#">O-Level</a></li>
									<li class="divider"></li>
									<li class="dropdown-header">High School/College</li>
									<li><a href="#">11th/12th</a></li>
									<li><a href="#">A-Level</a></li>
								</ul><!-- end dropdown-menu -->
							</li>

							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">University<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Science & engineering</a>
                     <ul class="dropdown-menu">
                      <li><a href="#">Arithmetic</a></li>
											<li><a href="#">Algebra</a></li>
											<li><a href="#">Calculus</a></li>
											<li><a href="#">Differential Equations</a></li>
											<li><a href="#">Linear Algebra</a></li>
											<li><a href="#">Geometry</a></li>
											<li><a href="#">Trigonometry</a></li>
											<li><a href="#">Statistics & Pprobability</a></li>
											<li><a href="#">Physics</a></li>
											<li><a href="#">Chemistry</a></li>
											<li><a href="#">Organic Chemistry</a></li>
											<li><a href="#">Biology</a></li>
											<li><a href="#">Health & Medicine</a></li>
											<li><a href="#">Electrical Engineering</a></li>
											<li><a href="#">Cosmology & Astronomy</a></li>
										</ul>
									</li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Arts & humanities</a>
										 <ul class="dropdown-menu">
											<li><a href="#">Art History</a></li>
											<li><a href="#">Grammar</a></li>
											<li><a href="#">Music</a></li>
											<li><a href="#">US History</a></li>
											<li><a href="#">World History</a></li>
										 </ul>
									</li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">School of Business</a>
										 <ul class="dropdown-menu">
											<li><a href="#">Accounting</a></li>
											<li><a href="#">Finance & Banking</a></li>
											<li><a href="#">Marketing</a></li>
											<li><a href="#">Management</a></li>
											<li><a href="#">Intermediate Accounting</a></li>
											<li><a href="#">Microeconomics</a></li>
											<li><a href="#">Macroeconomics</a></li>
											<li><a href="#">Finance & Capital Markets</a></li>
											<li><a href="#">Entrepreneurship</a></li>
										 </ul>
									</li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Computing</a>
										 <ul class="dropdown-menu">
											<li><a href="#">Computer Programming</a></li>
											<li><a href="#">Computer Science</a></li>
											<li><a href="#">Hour of Code</a></li>
											<li><a href="#">Computer Animation</a></li>
										 </ul>
									</li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media & Journalism</a>
										 <ul class="dropdown-menu">
											<li><a href="#">Social Media Marketing</a></li>
											<li><a href="#">Print Media Journalism</a></li>
											<li><a href="#">Electric Media Journalism</a></li>
										 </ul>
									</li>
								</ul><!-- end dropdown-menu -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<strong class="caret"></strong></a>

								<ul class="dropdown-menu">
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Development</a>
										<ul class="dropdown-menu">
											 <li><a href="webDevelopment.php">Web Development</a></li>
											 <li><a href="#">Mobile Apps</a></li>
											 <li><a href="#">Programming Languages</a></li>
											 <li><a href="#">Game Development</a></li>
											 <li><a href="#">Databases</a></li>
											 <li><a href="#">Software Testing</a></li>
											 <li><a href="#">Software Engineering</a></li>
											 <li><a href="#">Development Tools</a></li>
											 <li><a href="#">E-Commerce</a></li>
										</ul>
									</li>
									<li><a href="#">Business</a></li>
									<li><a href="#">IT & Software</a></li>
									<li><a href="#">Office Productivity</a></li>
									<li><a href="#">Personal Development</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Marketing</a></li>
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Photography</a></li>
									<li><a href="#">Health & Fitness</a></li>
									<li><a href="#">Teacher Training</a></li>
									<li><a href="#">Music</a></li>
									<li><a href="#">Academics</a></li>
									<li><a href="#">Language</a></li>
									<li><a href="#">Test Prep</a></li>
								</ul><!-- end dropdown-menu -->
							</li>
						</ul>

						<form class="navbar-form pull-left" action="courseSearch.php" method="post">
							<input type="text" class="form-control" name="searchInput" placeholder="Search this site..." id="searchInput" required>
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form -->


						<ul class="nav navbar-nav pull-right">
						    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Teachers</a></li>
					        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Students</a></li>
						    <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Jobs</a></li>
							<li><a href="loginPage.php"><span class="glyphicon glyphicon-eye-open"></span> Login</a></li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->

				</div><!-- end container -->
			</div><!-- end navbar -->

 <!-- Another part -->
         <br><br>
         <center>
			<h1>Student Registration Confirmation</h1>
			<hr>
			<h3 style="color:green"><?php echo $msg; ?></h3>
			<h3 style="color:red"><?php echo $msg1; ?></h3>
			<h3 style="color:red"><?php echo $msg2; ?></h3>
			<h3 style="color:red"><?php echo $msg3; ?></h3>
			<hr>
		</center>
         
		</div><!-- end container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<h4>Copyright &copy; 2016 by <a href="http://linkedin.com/in/msaifulbdjoy" target="_blank">M SAIFUL ISLAM</a></h4>
					<h4>And</h4>
					<h4>Coded with <span class="glyphicon glyphicon-heart"></span><a href="http://facebook.com/msaifulbdjoy" target="_blank"> MD. SAIFUL ISLAM</a></h4>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-4">
						<h4>About Us</h4>
						<p>e_Learning is a global marketplace for learning and teaching online where students are mastering new skills and achieving their goals by learning from an extensive library of lots of courses taught by expert instructors. Also you can get a job by your ranking , instructor can post a job also.</p>
						<h4>Why Here?</h4>
						<p>Because we are unique with our system through good quality courses by best Instructor/Author. <strong>Key thing is:</strong>
						<h6>Good Quality Course || Best Trainer || Job searching System</h6>
						<h6>Ranking with marking System || Certification Courses || Proper Management System</h6>
					</div><!-- end col-sm-4 -->

					<div class="col-sm-2">
						<h4>Contact Details</h4>
						<h5>Team Software Project Two</h5>
						<h6><span class="glyphicon glyphicon-map-marker"></span> House 47/B, Road 17, Nikunja#2, Khilkhet<br>Dhaka 1229, Bangladesh</h6>
					    <h6><span class="glyphicon glyphicon-phone"></span> +88-01-675094640, +88-02-898989, +88-02-999999</h6>
						<h6><span class="glyphicon glyphicon-envelope"></span> saifulbdjoy@gmail.com</h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
						<h4>Follow Us</h4>
						<h5><a href="http://twitter.com/msaifulbdjoy" target="_blank">Twitter</a></h5>
						<h5><a href="http://facebook.com/msaifulbdjoy" target="_blank">Facebook</a></h5>
						<h5><a href="http://googleplus.com/user/MD.SAIFULISLAM" target="_blank">Google Plus</a></h5>
						<h5><a href="http://youtube.com/saifulbdjoy" target="_blank">YouTube</a></h5>
						<h5><a href="http://linkedin.com/in/msaifulbdjoy" target="_blank">Linkedin</a></h5>
						<h5><a href="http://github.com/msaifulislam" target="_blank">GitHub</a></h5>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
						<h4>Project Details</h4>
						<h5>Software Project- 2</h5>
						<p>It's project about e-learning web portal that contains lots of features those are not exist in the existing e-learning portal. I include some unique features for this why you can call it One Stop learning site in the world!</p>
						<h5>Organization: <a href="http://www.aiub.edu" target="_blank">AIUB</a></h5>
						<h5>Semester: Fall 2016-17</h5>
						<h5>Supervisor: <a href="http://bd.linkedin.com/in/rezwan-ahmed-8861301b" target="_blank">MD. REZWAN AHMED Sir</a></h5>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>

	<script src="http://code.jquery.com/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="includes/js/script.js"></script>

	</body>
</html>
