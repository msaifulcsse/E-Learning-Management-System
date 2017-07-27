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
      <?php
          $pcid = $_REQUEST['id'];                                                  
          $sql = "SELECT * FROM `publish_course` WHERE publish_courseid = '$pcid'";
          $result = mysql_query($sql);
          $row = mysql_fetch_array($result);
          $_SESSION["courseid"] = $row['publish_courseid'];

          $sql3 = "select count(lesson_name) as lesson_num from course_curriculum where course_id = '$pcid';";
          $result3 = mysql_query($sql3);
          $row3 = mysql_fetch_array($result3);
          $tlesson_num = $row3['lesson_num'];

          $sql4 = "SELECT COUNT(DISTINCT s_id) AS student_num FROM taken_courses WHERE course_id = '$pcid';";
          $result4 = mysql_query($sql4);
          $row4 = mysql_fetch_array($result4);
          $tstudent_num = $row4['student_num'];

          $sql5 = "select count(quiz_id) as quiz_num from quiz where course_id = '$pcid';";
          $result5 = mysql_query($sql5);
          $row5 = mysql_fetch_array($result5);
          $tquiz_num = $row5['quiz_num'];
          
          $sql6 = "SELECT ROUND(SUM(rating_num), 2) AS rating_num FROM course_rating where course_id = '$pcid';";
          $result6 = mysql_query($sql6);
          $row6 = mysql_fetch_array($result6);
          $rating_num = $row6['rating_num'];
          
          $sql7 = "SELECT count(comments) as comment_num FROM course_rating where course_id = '$pcid';";
          $result7 = mysql_query($sql7);
          $row7 = mysql_fetch_array($result7);
          $tcomment_num = $row7['comment_num'];
          
          if($tcomment_num == 0 || $rating_num == 0){
            $trating_num = 0;
          }
          else{           
          $trating_num = ($rating_num)/($tcomment_num);
          }

          $sql8 = "SELECT count(discussion_id) as discussion_num FROM course_discussion where course_id = '$pcid';";
          $result8 = mysql_query($sql8);
          $row8 = mysql_fetch_array($result8);
          $tdiscussion_num = $row8['discussion_num'];
        ?>
          <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">  
               <div class="form-group row" align="left">
               <div class="col-sm-4">
                 <h2><?php echo 'Course Name:<br>'.$row['course_name'].'<br> Details.'; ?></h2>
                 <h3 style="color:#A9D009"><?php echo 'Course ID: '.$row['publish_courseid']; ?></h3>
              </div>
                <div class="col-sm-4">
                 <h3 style="color:coral"><?php echo 'Students Enroll#: '.$tstudent_num; ?></h3>
                 <h3 style="color:green"><?php echo 'Total Lesson#: '.$tlesson_num; ?></h3>
                 <h3 style="color:blue"><?php echo 'Rating#: '.$trating_num.' (Got From: '.$tcomment_num.' Students)'; ?></h3>
              </div>
                <div class="col-sm-4" align="right">
                  <?php echo '<embed src="'.$row['url'].'" width="280px" height="200"></embed>';?><p style="color: green; font-size: 15px;"><?php echo $row['intro_lesson_name']; ?></p>
                </div>
               </div>
               <hr>
            </div> 
            <hr>
            <div class="col-sm-12">
                <!--Approve Course -->
              <form method="POST" enctype="multipart/form-data">
                           <div class="form-group row">
                            <label for="courseid" class="col-sm-3 col-form-label">Course ID</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="courseid" name="courseid"  value="<?php echo $row['publish_courseid'] ?>" readonly>
                            </div>
                           </div>
                          <div class="form-group row">
                            <label for="cname" class="col-sm-3 col-form-label">Course Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="cname" name="cname"  value="<?php echo $row['course_name'] ?>" readonly>
                            </div>
                           </div>
                            <div class="form-group row">
                              <label for="category" class="col-sm-3 col-form-label">Category</label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" id="category" name="category"  value="<?php echo $row['category'] ?>" readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="category" class="col-sm-3 col-form-label">Sub Category</label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" id="subcategory" name="subcategory"  value="<?php echo $row['sub_category'] ?>" readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="category" class="col-sm-3 col-form-label">Sub SubCategory</label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" id="subsubcategory" name="subsubcategory"  value="<?php echo $row['subsub_category'] ?>" readonly>
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="prerequisite" class="col-sm-3 col-form-label">Prerequisite</label>
                              <div class="col-sm-9">
                                 <textarea class="form-control" id="prerequisite" name="prerequisite" rows="3" readonly><?php echo $row['prerequisite']; ?></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="description" class="col-sm-3 col-form-label">Description</label>
                              <div class="col-sm-9">
                                 <textarea class="form-control" id="description" name="description" rows="3" readonly><?php echo $row['description']; ?></textarea>
                              </div>
                            </div>
                          <div class="form-group row">
                            <label for="publishdate" class="col-sm-3 col-form-label">Publish Date</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="publishdate" name="publishdate" value="<?php echo $row['publish_date']; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tq" class="col-sm-3 col-form-label">Total Quiz</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="tq" name="tq" value="<?php echo $tquiz_num; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="td" class="col-sm-3 col-form-label">No. of Discussion</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="td" name="td" value="<?php echo $tdiscussion_num; ?>" readonly>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tc" class="col-sm-3 col-form-label">No. of Comments</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="tc" name="tc" value="<?php echo $tcomment_num; ?>" readonly>
                            </div>
                          </div>
                 </form>
                 <hr>
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label"> </label>
                      <div class="col-sm-9" align="center">
                        <button onclick="window.location.href='loginPage.php'" style="background-color: green; color: white; font-size: 28px;">Take This Course</button>
                      </div>
                  </div>      
            </div>
          </div>
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