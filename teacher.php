<?php
  include 'header.php'; 

  $aid = $_REQUEST['id'];   

  $sql = "SELECT * FROM `teacher_info` WHERE t_id = '$aid'";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);               

  $sql1 = "SELECT COUNT(DISTINCT s_id) AS s_num FROM taken_courses WHERE author_id = '$aid';";
  $result1 = mysql_query($sql1);
  $row1 = mysql_fetch_array($result1); 
  $s_num = $row1['s_num'];

  $sql2 = "SELECT count(publish_courseid) as c_num from publish_course WHERE author_id = '$aid'";
  $result2 = mysql_query($sql2);
  $row2 = mysql_fetch_array($result2); 
  $c_num = $row2['c_num'];
?>

<!-- Content -->
<div class="container">
    <div class="row">
          <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">  
               <div class="form-group row">
                <label for="myname" class="col-sm-4 col-form-label" style="font-size: 30px"><?php echo $row['fname']; ?> Details</label>
                <div class="col-sm-4">
                    <h3 style="color: green"><?php echo 'Number of Course: '.$c_num; ?></h3>
                    <h3 style="color: coral"><?php echo 'Number of Student: '.$s_num; ?></h3>
                </div>
                <div class="col-sm-4" align="right">
                  <?php echo '<img height="150px" width="200px" src="data:image;base64,'.$row['image'].'"/>';?>
                </div>
               </div>
               <hr>
            </div>
            <hr>
            <div class="col-sm-12">
                <!-- Profile -->
                 <div class="form-group row">
                            <label for="fname" class="col-sm-3 col-form-label">Author Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="fname" name="fname"  value="<?php echo $row['fname'] ?>" readonly>
                            </div>
                           </div>
                           <div class="form-group row">
                            <label for="occupation" class="col-sm-3 col-form-label">Occupation</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="occupation" name="occupation"  value="<?php echo $row['occupation'] ?>" readonly>
                            </div>
                           </div>
                           <div class="form-group row">
                              <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="gender" name="gender"  value="<?php echo $row['gender'] ?>" readonly >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="education" class="col-sm-3 col-form-label">Education</label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" id="education" name="education"  value="<?php echo $row['education'] ?>" readonly >
                              </div>
                            </div>
                             <div class="form-group row">
                              <label for="address" class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                 <textarea class="form-control" id="address" name="address" rows="3" readonly><?php echo $row['address'] ?></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="gitLink" class="col-sm-3 col-form-label">GitHub Link</label>
                              <div class="col-sm-9">
                                <input class="form-control" type="url" id="url" name="url" value="<?php echo $row['gitlink'] ?>" readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="bio" class="col-sm-3 col-form-label">Your Bio(Details)</label>
                              <div class="col-sm-9">
                                 <textarea  class="form-control" id="bio" name="bio" rows="3" readonly> <?php echo $row['bio'] ?></textarea>
                              </div>
                            </div>
                          <div class="form-group row">
                              <label for="email" class="col-sm-3 col-form-label">Email</label>
                              <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="email" disabled value="<?php echo $row['email'] ?>" readonly>
                              </div>
                            </div>
                          <div class="form-group row">
                          <label for="email" class="col-sm-3 col-form-label">Account CreateDate</label>
                          <div class="col-sm-9">
                            <input type="date" name="date" class="form-control" id="date" readonly value="<?php echo $row['idcreate_date'] ?>">
                          </div>
                         </div>
                 <h2 align="center" style="color: coral"><hr>List Of Students(Short Details)<hr></h2>
                 <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Education</th>
                        <th>Membership</th>
                        <th>Marks</th>
                        <th>Recommendation</th>
                        <th>Taken Course</th>
                      </tr>
                    </thead>
                    <?php
                        $sql3 = "SELECT DISTINCT s_id FROM taken_courses where author_id='$aid';";
                        $result3 = mysql_query($sql3);
                        $i = 0;   
                        while($row3 = mysql_fetch_array($result3)) {
                          $s_id = $row3['s_id'];
                              $sql44 = "SELECT * FROM student_info WHERE s_id = '$s_id'";
                              $result44 = mysql_query($sql44); 
                              $row44 = mysql_fetch_array($result44);
                          ?>              
                         <tbody>
                           <tr class="success">
                           <td>
                            <?php echo '<img height="40px" width="60px" src="data:image;base64,'.$row44['image'].'"/>';?>
                           </td>
                           <td>
                            <?php echo $row44['fname'];?>
                           </td>
                           <td>
                            <?php echo $row44['education'];?>
                           </td>
                           <td>
                            <?php 
                              $from=date_create(date('Y-m-d'));
                              $to=date_create($row44['idcreate_date']);
                              $diff=date_diff($to,$from);
                              echo $diff->format('%R%a Days');
                            ?>
                           </td>
                           <td>
                            <?php
                              $sql4 = "SELECT SUM(marks) AS total FROM marks WHERE student_id = '$s_id'";
                              $result4 = mysql_query($sql4);
                              $row4 = mysql_fetch_array($result4);
                              $mark = $row4['total'];
                              if($mark == "NULL" || $mark == 0 ){
                                $mark = 0;
                              }
                              else{           
                              $mark = $mark;
                              }
                              echo $mark;
                            ?>
                           </td>
                           <td>
                            <?php
                               $sql5 = "SELECT count(recommendation) as num_reco from recommendation WHERE student_id = '$s_id'";
                              $result5 = mysql_query($sql5);
                              $row5 = mysql_fetch_array($result5);
                              echo $row5['num_reco'];
                            ?>
                           </td>
                           <td>
                             <?php 
                               $sql6 = "SELECT count(course_id) as c_num from taken_courses WHERE author_id = '$aid' AND s_id = '$s_id'";
                              $result6 = mysql_query($sql6);
                              $row6 = mysql_fetch_array($result6);
                               echo $row6['c_num'];
                            ?>
                           </td>
                          </tr>
                          </tbody>                
                    <?php
                    }
                    ?>
                </table>
                <h2 align="center" style="color: green"><hr>List Of Course(Short Details)<hr></h2>
                  <?php                                                    
                        $sql = "SELECT * FROM `publish_course` WHERE author_id='$aid'";
                        $result = mysql_query($sql);
                        $i = 0;        
                      ?>
           <form method="POST">
                <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>CourseName</th>
                        <th>Category</th>
                        <th>SubCAtegory</th>
                        <th>PublishDate</th>
                        <th>View</th>
                      </tr>
                    </thead>
                    <?php
                        while($row = mysql_fetch_array($result)) {
                         $tid = $row['publish_courseid'];?>              
                         <tbody>
                           <tr class="success">
                           <td>
                            <?php echo $row['publish_courseid']?>
                           </td>
                           <td>
                            <?php echo $row['course_name'] ?>
                           </td>
                           <td>
                             <?php echo $row['category']?>
                           </td>
                           <td>
                             <?php echo $row['sub_category']?>
                           </td>
                           <td>
                             <?php echo $row['publish_date']?>
                           </td>
                           <td onclick="document.location = 'course.php?id=<?php echo urlencode($tid);?>'" style="background-color: coral; color: white; font-size: 15px;">Details</td>
                          </tr>
                          </tbody>                
                    <?php
                    }
                    ?>
                </table>
             </form>
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
  <script>window.jQuery || document.write('<script src="../includes/js/jquery-1.8.2.min.js"><\/script>')</script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../includes/js/script.js"></script>
</body>
</html>