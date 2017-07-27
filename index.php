<?php
require_once("mysql_db.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
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
						    <li><a href="teacherList.php"><span class="glyphicon glyphicon-user"></span>Teachers</a></li>
                            <li><a href="studentList.php"><span class="glyphicon glyphicon-user"></span>Students</a></li>
                            <li><a href="jobList.php"><span class="glyphicon glyphicon-briefcase"></span>Jobs</a></li>
							<li><a href="loginPage.php"><span class="glyphicon glyphicon-eye-open"></span> Login</a></li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->

				</div><!-- end container -->
			</div><!-- end navbar -->
            <hr>
            <br>
			<div class="row" id="moreCourses">
				<div class="col-12">
					<h3>Recent Courses (<a href="recentCourses.php">View All</a>)</h3>
					<div class="thumbnails row">
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_psd2html5.jpg" alt="PSD to HTML5 & CSS3">

								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> New</div>

								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>

									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_psd2html5.jpg" alt="PSD to HTML5 & CSS3">

								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> New</div>

								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>

									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_webhosting101.jpg" alt="Web Hosting 101">

								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> New</div>

								<div class="caption">
									<h3>Web Hosting 101</h3>

									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_webhosting101.jpg" alt="Web Hosting 101">

								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> New</div>

								<div class="caption">
									<h3>Web Hosting 101</h3>

									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
					</div><!-- end row -->
				</div><!-- end col-12 -->
			</div><!-- end moreCourses -->

			<hr>
      <div class="row" id="moreCourses">
				<div class="col-12">
					<h3>Popular Courses (<a href="popularCourses.php">View All</a>)</h3>
					<div class="thumbnails row">
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_psd2html5.jpg" alt="PSD to HTML5 & CSS3">

								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> Popular</div>

								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>

									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_psd2html5.jpg" alt="PSD to HTML5 & CSS3">

								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> Popular</div>

								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>

									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_webhosting101.jpg" alt="Web Hosting 101">

								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> Popular</div>

								<div class="caption">
									<h3>Web Hosting 101</h3>

									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
						<div class="col-3">
							<div class="thumbnail">
								<img src="images/item_webhosting101.jpg" alt="Web Hosting 101">

								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> Popular</div>

								<div class="caption">
									<h3>Web Hosting 101</h3>

									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>

									<p><a href="#" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="#" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-3 -->
					</div><!-- end row -->
				</div><!-- end col-12 -->
			</div><!-- end moreCourses -->
			<hr>
			<div class="row" id="moreInfo">
				<div class="col-sm-6">
					<h3>Top Ten Teacher Ranking</h3>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
					</div><!-- list-group -->
				</div><!-- end col-sm-6 -->

				<div class="col-sm-6">
					<h3>Top Ten Student Ranking</h3>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
					</div><!-- list-group -->
				</div><!-- end col-sm-6 -->
			</div><!-- end moreInfo -->

			<hr>

		   <div class="row" id="featuresHeading">
				<div class="col-12">
					<h3>Latest Job Circular (<a href="recentJobs.php">View All</a>)</h3>
				</div><!-- end col-12 -->
			</div><!-- end featuresHeading -->

			<div class="row" id="features">
				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Markup with HTML5</h3>
						</div><!-- end panel-heading -->
						<img src="images/badge_html5.jpg" alt="HTML5" class="img-circle">

						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>

						<a href="#" target="_blank" class="btn btn-warning btn-block">Learn to code HTML5</a>
					</div><!-- end panel -->
				</div><!-- end feature -->

				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Style with CSS3</h3>
						</div><!-- end panel-heading -->
						<img src="images/badge_css3.jpg" alt="CSS3" class="img-circle">

						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>

						<a href="#" target="_blank" class="btn btn-danger btn-block">Style it up with CSS3</a>
					</div><!-- end panel -->
				</div><!-- end feature -->

                <div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Style with CSS3</h3>
						</div><!-- end panel-heading -->
						<img src="images/badge_css3.jpg" alt="CSS3" class="img-circle">

						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>

						<a href="#" target="_blank" class="btn btn-danger btn-block">Style it up with CSS3</a>
					</div><!-- end panel -->
				</div><!-- end feature -->

				<div class="col-sm-3 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Framework by Bootstrap 3</h3>
						</div><!-- end panel-heading -->
						<img src="images/badge_bootstrap.jpg" alt="Bootstrap 3" class="img-circle">

						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>

						<a href="#" target="_blank" class="btn btn-info btn-block">More Bootstrap</a>
					</div><!-- end panel -->
				</div><!-- end feature -->
			</div><!-- end features -->
		</div><!-- end container -->

		
       <?php include 'footer.php'; ?>
	</body>
</html>
