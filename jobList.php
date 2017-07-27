<?php
  session_start();
  $_SESSION["user"] = "user";
  
  require_once("mysql_db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/styles.css">
    <script src="includes/js/modernizr-2.6.2.min.js"></script>

    <script src="src/jquery.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
	<style type="text/css">
		body {
				padding-top:65px;
			}
			 footer {
				background: #333;
				color: #eee;
				font-size: 11px;
				padding: 20px;
			}
			@media (min-width: 979px) {

			  #midCol.affix-top {
			      position:fixed;
			  	  width:265px;
			  	  margin-right:10px;
			  	  
			  }
			  
			  #midCol.affix {
			      position:static;
			      width:100%;
			  }

			}

			@media (min-width: 767px) {
			  .affix,.affix-top {
			      position:fixed;
			  }
			}
	</style>
</head>
<body>
<!-- Fixed navbar -->
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
         
    </div><!-- end container --> 


<!-- Content -->
<div class="container">
  	<div class="row">
          <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
            <br><br>
               <h2 align="center">All Job</h2>
               <hr>
            </div>
            <hr>
            <div class="col-sm-12">
                <!-- Teacher Approval -->
      <center>
                    <?php                                                    
                        $sql = "SELECT * FROM `job_info`";
                        $result = mysql_query($sql);
                        $i = 0;        
                      ?>
           <form method="POST">
                <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Vacancy</th>
                        <th>Experience</th>
                         <th>Location</th>
                        <th>Image</th>
                        <th>Deadline</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <?php
                        while($row = mysql_fetch_array($result)) {
                         $id = $row['job_id'];
                         //$_SESSION["job_id"] = $row['job_id'];
                         ?>              
                         <tbody>
                           <tr class="success">
                           <td>
                            <?php echo $row['job_id']?>
                           </td>
                           <td>
                            <?php echo $row['job_title'] ?>
                           </td>
                           <td>
                             <?php echo $row['vacancy']?>
                           </td>
                           <td>
                             <?php echo $row['experience']?>
                           </td>
                           <td>
                             <?php echo $row['job_location']?>
                           </td>
                           <td>
                             <?php echo '<img height="40px" width="60px" src="data:image;base64,'.$row['image'].'"/>';?>
                           </td>
                           <td>
                             <?php echo $row['last_date']?>
                           </td>
                           <td onclick="document.location = 'job.php?id=<?php echo urlencode($id);?>'" style="background-color: coral; color: white; font-size: 15px;">Details</td>
                          </tr>
                          </tbody>                
                    <?php
                    }
                    ?>
                </table>
             </form>
             </center>
            </div>
          </div>
          <br><br><br><br>
          <hr>
      </div>
    </div>
</div>

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