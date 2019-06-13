<!DOCTYPE html>
<html>
<head>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>IUB Faculty</title>
	<style>
		body {
		  background: url(https://www.chambersusa.com/wp-content/uploads/2018/03/ali-yahya-488146-unsplash-4096x2731.jpg?fbclid=IwAR1BDayF6p0QjJcr4DyM3cUVoMbDHbByOqW0thwQh0mAmpI0sfn3OIyCiKY);
		  background-size: cover;
		  background-position: center;
		    width: 100%;
		    height: 100%;
		    color: #f2f2f2;
		}
		.container input{
			width: 50%;
		}

		#systemOfStudentEnrollment, #year, #gradYear{
			width: 50%;
		}
		h5{
			border-bottom: solid white 0.5px;
			width: 40%;
			padding-bottom: 1px;
		}



	</style>
</head>
<body>

	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <li><a href="iub_faculty_view_graph.php">View Graph</a></li>
        <li><a href="iub_faculty_view_student.php">Student Info</a></li>
        <li><a href="iub_faculty_send_report.php">Save Report</a></li>
        <li><a href="iub_faculty_receive_report.php">Receive Report</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Log Out</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container">
  		<h3>Input Demographic Report:</h3><br>
  		<form method="get" action="./php/iub_save_report.php" class="form-horizontal">
  			<div class="form-group">
			    <label for="programsOffered" class="col-sm-2 control-label">Programs Offered</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="programsOffered" id="programsOffered" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="residentialFacilities" class="col-sm-2 control-label">Residential Facilities</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="residentialFacilities" id="residentialFacilities" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="systemOfStudentEnrollment" class="col-sm-2 control-label">System Of Student Enrollment</label>
			    <div class="col-sm-10">
				      <select class="form-control" name="systemOfStudentEnrollment" id="systemOfStudentEnrollment">
				      		<option value="0" selected disabled>System</option>
				          <option value="Semester">Semester</option>
				          <option value="Quarter">Quarter</option>
				          <option value="4-4-1">4-4-1</option>
				          <option value="Continuous">Continuous</option>

				      </select>
				</div>
			</div>
				<hr>
				<div class="form-group">
					<h5><strong><em>Annual Total Intake and Total Number of Students</em></strong></h5><br>
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
			    <label for="annualTotalIntake" class="col-sm-2 control-label">Annual Total Intake</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="annualTotalIntake" id="annualTotalIntake" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="totalNumberOfStudents" class="col-sm-2 control-label">Total Number Of Students</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="totalNumberOfStudents" id="totalNumberOfStudents" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="male" class="col-sm-2 control-label">Male</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="male" id="male" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="female " class="col-sm-2 control-label">Female </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="female" id="female " required>
			    </div>
				</div>
				<hr>
				<div class="form-group">
					<h5><strong><em>Number of Teaching Staff</em></strong></h5><br>
			    <label for="fullTimeAndPartTime" class="col-sm-2 control-label">Full Time and Part Time</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="fullTimeAndPartTime" id="fullTimeAndPartTime" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="fullTime " class="col-sm-2 control-label">Full Time </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="fullTime" id="fullTime " required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="partTime " class="col-sm-2 control-label">Part Time </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="partTime" id="partTime " required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="maleTeacher " class="col-sm-2 control-label">Male Teacher </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="maleTeacher" id="maleTeacher " required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="femaleTeacher " class="col-sm-2 control-label">Female Teacher </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="femaleTeacher" id="femaleTeacher " required>
			    </div>
				</div>
				<hr>
				<div class="form-group">
					<h5><strong><em>Number of Non-Teaching Staff</em></strong></h5><br>
			    <label for="total " class="col-sm-2 control-label">Total </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="total" id="total " required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="officers" class="col-sm-2 control-label">Officers</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="officers" id="officers" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="class" class="col-sm-2 control-label">Class(III and IV)</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="class" id="class" required>
			    </div>
				</div>
				<hr>
				<div class="form-group">
					<h5><strong><em>Total Number of Graduates</em></strong></h5><br>
			    <label for="gradYear " class="col-sm-2 control-label">Graduating Year </label>
			    <div class="col-sm-10">
			      <select class="form-control" name="gradYear" id="gradYear">
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
			    <label for="honor" class="col-sm-2 control-label">Honor Graduates</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="honor" id="honor" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="post" class="col-sm-2 control-label">Post Graduates</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="post" id="post" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="technical" class="col-sm-2 control-label">Technical Graduates</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="technical" id="technical" required>
			    </div>
				</div>
				<hr>
				<div class="form-group">
					<h5><strong><em>Fellowships and Scholarships Offered by the University</em></strong></h5><br>
			    <label for="hundredPercent " class="col-sm-2 control-label">100% </label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="hundredPercent" id="hundredPercent " required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="fifteenToSeventyPercent" class="col-sm-2 control-label">15% to 75%</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="fifteenToSeventyPercent" id="fifteenToSeventyPercent" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="avgTk" class="col-sm-2 control-label">Average Per Total Student</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="avgTk" id="avgTk" required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="totalTk" class="col-sm-2 control-label">Total (Tk)</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="totalTk" id="totalTk" required>
			    </div>
				</div>
				<hr>
				<div class="form-group">
					<h5><strong><em>Budget Estimates</em></strong></h5><br>
			    <label for="recurringExpenses " class="col-sm-2 control-label">Recurring Expenses</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="recurringExpenses" id="recurringExpenses " required>
			    </div>
				</div>
				<div class="form-group">
			    <label for="developmentExpenses" class="col-sm-2 control-label">Development Expenses</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" name="developmentExpenses" id="developmentExpenses" required>
			    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Save Report</button>
				    </div>
				</div>


  		</form>
  	</div>


</body>
</html>
