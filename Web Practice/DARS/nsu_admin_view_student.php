<?php 

  error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Chart -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <title>nsu Admin</title>
  <style>
    body {
      background: url(./img/view_student.jpg);
      background-size: cover;
      background-position: center;
        width: 100%;
        height: 100%;
    }
    .container{
      /* background: #f5f5ef; */
    }
    .col-md-10 {
      padding: 1%;
      border: #f2f2f2 solid 1px;
      /* color: #f2f2f2; */

    }

    #id, #name, #dept, #year, #semester{
      width: 200px;
    }

    table{
      background:  #ccccff;
      color: black;
      width: 100%;
      border: black 2px solid;
    }
    table th{
      padding: 5px;
      text-align: center;
      border: black 2px solid;
    }
    td{
      padding: 4px;
      border: black 2px solid;
    }
    .col-sm-2{
      /* color: #e6e6e6; */
    }
    #menu {
      position: fixed;
      right: 0;
      top: 50%;
      width: 8em;
      margin-top: -2.5em;
      color: gray;
    }
    li a{
      color: black;
    }

  </style>

</head>
<body>

  <ul id="menu">
    <li><a href="#searchById">ID</a></li>
    <!-- <li><a href="#searchByName">Name</a></li> -->
    <li><a href="#searchByDept">Dept</a></li>
    <li><a href="#searchByYear">Year</a></li>
    <li><a href="#searchBySemester">Semester</a></li>
  </ul>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="nsu_admin.php">Manage</a></li>
          <li><a href="nsu_admin_view_graph.php">View Graph</a></li>
          <li><a href="nsu_admin_view_student.php">Student Info</a></li>
          <li><a href="nsu_admin_send_report.php">Save Report</a></li>
          <li><a href="nsu_admin_receive_report.php">Receive Report</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Log Out</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class = "container">
    <div  class="row">
      <div id = "searchById" class="col-md-10 col-sm-12">
        <form method="get" class="form-horizontal">
          <div class="form-group">
            <label for="id" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="id" id="id" placeholder="ID">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Search By ID</button>
            </div>
          </div>
        </form>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <!-- <th>Name</th> -->
              <th>School</th>
              <th>Dept</th>
              <th>Major</th>
              <th>Enrolled Year</th>
              <th>Enrolled Semester</th>
            </tr>  
          </thead>
          <tbody>
            
            <?php 

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "project";

              $conn = mysqli_connect($servername, $username, $password, $dbname);
              // $_GET["dept"] = "";
              $id = $_GET["id"];
              $university = "nsu";
              $result = mysqli_query($conn," SELECT `id`,`school`,`dept`,`major`,`year`,`semester`FROM `student` WHERE `id` = '$id' AND  `university`='$university'");

              while($row = mysqli_fetch_assoc($result)):

             ?>
              
              <tr>
                <td><?php echo $row['id']; ?></td>
                
                <td><?php echo $row['school']; ?></td>
                <td><?php echo $row['dept']; ?></td>
                <td><?php echo $row['major']; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['semester']; ?></td>
              </tr>

            <?php endwhile; ?>
          </tbody>
          
        </table>
      </div>
    </div>
    <br>
    

    <div  class="row">
      <div id="searchByDept" class="col-md-10 col-sm-12">
        <form method="get" class="form-horizontal">
          <div class="form-group">
            <label for="dept" class="col-sm-2 control-label">Dept</label>
            <div class="col-sm-10">

              <select class="form-control" name="dept" id="dept">
                  <option value="0" selected disabled>Dept</option>
                  <option value="computer science & engineering">Computer Science & Engineering</option>
                  <option value="electrical & electronic engineering">Electrical & Electronic Engineering</option>
                  <option value="physical sciences">Physical Sciences</option>
                  <option value="environmental science">Environmental Science</option>
                  <option value="environment management">Environment Management</option>
                  <option value="media and communication">Media And Communication</option>
                  <option value="english">English</option>
                  <option value="social sciences and humanities">Social Sciences And Humanities</option>
                  <option value="law">Law</option>
                  <option value="pharmacy">Pharmacy</option>

                </select>

            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Search By Dept</button>
            </div>
          </div>
        </form>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <!-- <th>Name</th> -->
              <th>School</th>
              <th>Dept</th>
              <th>Major</th>
              <th>Enrolled Year</th>
              <th>Enrolled Semester</th>
            </tr>  
          </thead>
          <tbody>
            
            <?php 

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "project";

              $conn = mysqli_connect($servername, $username, $password, $dbname);
              // $_GET["dept"] = "";
              $dept = $_GET["dept"];
             $university = "nsu";
              $result = mysqli_query($conn," SELECT `id`,`school`,`dept`,`major`,`year`,`semester`FROM `student` WHERE `dept` = '$dept' AND  `university`='$university'");

              while($row = mysqli_fetch_assoc($result)):

             ?>
              
              <tr>
                <td><?php echo $row['id']; ?></td>
                
                <td><?php echo $row['school']; ?></td>
                <td><?php echo $row['dept']; ?></td>
                <td><?php echo $row['major']; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['semester']; ?></td>
              </tr>

            <?php endwhile; ?>
          </tbody>
          
        </table>

      </div>
    </div>
    <br>
    <div  class="row">
      <div id="searchByYear" class="col-md-10 col-sm-12">
        <form method="get" class="form-horizontal">
          <div class="form-group">
            <label for="year" class="col-sm-2 control-label">Year</label>
            <div class="col-sm-10">
              <select class="form-control" name="year" id="year">
                  <option value="0" selected disabled>Year</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>

                </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Search By Year</button>
            </div>
          </div>
        </form>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <!-- <th>Name</th> -->
              <th>School</th>
              <th>Dept</th>
              <th>Major</th>
              <th>Enrolled Year</th>
              <th>Enrolled Semester</th>
            </tr>  
          </thead>
          <tbody>
            
            <?php 

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "project";

              $conn = mysqli_connect($servername, $username, $password, $dbname);

              $year = $_GET["year"];
              $university = "nsu";
              $result = mysqli_query($conn," SELECT `id`,`school`,`dept`,`major`,`year`,`semester`FROM `student` WHERE `year` = '$year' AND  `university`='$university'");

              while($row = mysqli_fetch_assoc($result)):

             ?>
              
              <tr>
                <td><?php echo $row['id']; ?></td>
                
                <td><?php echo $row['school']; ?></td>
                <td><?php echo $row['dept']; ?></td>
                <td><?php echo $row['major']; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['semester']; ?></td>
              </tr>

            <?php endwhile; ?>
          </tbody>
          
        </table>


      </div>
    </div>
    <br>
      <div  class="row">
      <div id="searchBySemester" class="col-md-10 col-sm-12">
        <form method="get" class="form-horizontal">
          <div class="form-group">
            <label for="semester" class="col-sm-2 control-label">Semester</label>
            <div class="col-sm-10">

              <select class="form-control" name="semester" id="semester">
                  <option value="0" selected disabled>Semester</option>
                  <option value="Spring">Spring</option>
                  <option value="Summer">Summer</option>
                  <option value="Autumn">Autumn</option>

              </select>

            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Search By Semester</button>
            </div>
          </div>
        </form>

        <table>
          <thead>
            <tr>
              <th>ID</th>
              <!-- <th>Name</th> -->
              <th>School</th>
              <th>Dept</th>
              <th>Major</th>
              <th>Enrolled Year</th>
              <th>Enrolled Semester</th>
            </tr>  
          </thead>
          <tbody>
            
            <?php 

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "project";

              $conn = mysqli_connect($servername, $username, $password, $dbname);

              $semester = $_GET["semester"];
              $university = "nsu";
              $result = mysqli_query($conn," SELECT `id`,`school`,`dept`,`major`,`year`,`semester`FROM `student` WHERE `semester` = '$semester' AND  `university`='$university'");

              while($row = mysqli_fetch_assoc($result)):

             ?>
              
              <tr>
                <td><?php echo $row['id']; ?></td>
                
                <td><?php echo $row['school']; ?></td>
                <td><?php echo $row['dept']; ?></td>
                <td><?php echo $row['major']; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['semester']; ?></td>
              </tr>

            <?php endwhile; ?>
          </tbody>
          
        </table>

      </div>
    </div>


  </div>



</body>
</html>
