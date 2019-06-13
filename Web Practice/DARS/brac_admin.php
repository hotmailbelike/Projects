<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>BRAC Admin</title>
	<style>
		body {
		  background: url(./img/admin.png);
		  background-size: cover;
		  background-position: center;
		    width: 100%;
		    height: 100%;
		}
		.container{
			/* background: #f5f5ef; */
		}
		.col-md-6 {

   		/* border-right: #f2f2f2 solid 0.5px; */
    	color: #f2f2f2;

		}
		.bd{
			border-right: #f2f2f2 solid 0.5px;

		}
		.bd2{
			color: #f2f2f2;
			border-top: #f2f2f2 solid 0.5px;
			width: 60%;
			margin-left: 20%;
			margin-top: 3%;
			/* border-right: #f2f2f2 solid 0.5px; */
		}
		.bd3{
			/* border-bottom: #f2f2f2 solid 0.5px; */
		}



	</style>
</head>
<body>
	<?php

	 ?>
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <li><a href="brac_admin.php">Manage</a></li>
        <li><a href="brac_admin_view_graph.php">View Graph</a></li>
        <li><a href="brac_admin_view_student.php">Student Info</a></li>
        <li><a href="brac_admin_send_report.php">Save Report</a></li>
        <li><a href="brac_admin_receive_report.php">Receive Report</a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Log Out</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 bd">
				<h5>Input Student Info:</h5>
				<form action="./php/brac_admin_processor.php" method="get" class="form-horizontal" >
				  <div class="form-group">
				    <label for="id" class="col-sm-2 control-label">ID</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="id" id="id" placeholder="ID" required>
				    </div>
				  </div>
				  <!-- <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
				    </div>
				  </div> -->
				  <div class="form-group">
				    <label for="semester year" class="col-sm-2 control-label">Enrolled</label>
				    <div class="col-sm-4">
				      <select class="form-control" name="semester" id="semester" required>
				      		<option value="" selected disabled>Semester</option>
				          <option value="Spring">Spring</option>
				          <option value="Summer">Summer</option>
				          <option value="Autumn">Autumn</option>

				      </select>
				    </div>
				    <div class="col-sm-4">
				      <select class="form-control" name="year" id="year" required>
				      		<option value="" selected disabled>Year</option>
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
				    <label for="school" class="col-sm-2 control-label">School</label>
				    <div class="col-sm-3">
				      <select class="form-control" name="school" id="school" required>
				      		<option value="" selected disabled>School</option>
				          <option value="isb">isb</option>
				          <option value="secs">secs</option>
				          <option value="sesm">sesm</option>
				          <option value="slas">slas</option>
				          <option value="sph">sph</option>
				          <option value="sls">sls</option>

				        </select>
				    </div>
				    <label for=dept class="col-sm-2 control-label">Dept</label>
				    <div class="col-sm-5">
				      <select class="form-control" name="dept" id="dept" required>
				      		<option value="" selected disabled>Dept</option>
				          <option value="computer science & engineering">Computer Science & Engineering</option>
				          <option value="electrical & electronic engineering">Electrical & Electronic Engineering</option>
				          <option value="physical sciences">Physical Sciences</option>
				          <option value="environmental science and management">Environmental Science And Management</option>
				          <option value="liberal arts and social sciences">Liberal Arts and Social Sciences</option>
				          <option value="business">Business</option>
				          <option value="english">English</option>
				          <option value="life science">Life Science</option>
				          <option value="law">Law</option>
				          <option value="pharmacy">Pharmacy</option>

				        </select>
				    </div>
				  </div>



					<div class="form-group">
				    <label for="major" class="col-sm-2 control-label">Major</label>
				    <div class="col-sm-10">
				      <select class="form-control" name="major" id="major" required>
			      		<option value="" selected disabled>Major</option>
			          <option value="B.Sc. in Computer Engineering (CEN)">B.Sc. in Computer Engineering (CEN)</option>
			          <option value="B.Sc. in Computer Science (CSC)">B.Sc. in Computer Science (CSC)</option>
			          <option value="B.Sc. in Computer Science & Engineering (CSE)">B.Sc. in Computer Science & Engineering (CSE)</option>
			          <option value="B.Sc. in EEE">B.Sc. in EEE</option>
			          <option value="B.Sc. in ETE">B.Sc. in ETE</option>
			          <option value="B.Sc. in Physics">B.Sc. in Physics</option>
			          <option value="B.Sc. in Mathematics">B.Sc. in Mathematics</option>
			          <option value="B.Sc. in Environmental Science">B.Sc. in Environmental Science</option>
			          <option value="B.Sc in Environmental Management">B.Sc in Environmental Management</option>
			          <option value="B.Sc in Population Environment">B.Sc in Population Environment</option>
			          <option value="BBA in International Business">BBA in International Business</option>
			          <option value="BBA in Management And Information System">BBA in Management And Information System</option>
			          <option value="BBA in Human Resources Management">BBA in Human Resources Management</option>
			          <option value="B.A. in English Literature">B.A. in English Literature</option>
			          <option value="B.A. in English Language Teaching">B.A. in English Language Teaching</option>
			          <option value="Bachelor of Law">Bachelor of Law</option>
			          <option value="BSS in Media & Communication">BSS in Media & Communication</option>
			          <option value="Bachelors in Anthropology">Bachelors in Anthropology</option>
			          <option value="Bachelors in Sociology">Bachelors in Sociology</option>
			          <option value="Bachelors in Global Studies & Governance">Bachelors in Global Studies & Governance</option>
			          <option value="Bachelor of Pharmacy">Bachelor of Pharmacy</option>
			          <option value="B.Sc in Microbiology">B.Sc in Microbiology</option>
			          <option value="B.Sc in Biochemistry">B.Sc in Biochemistry</option>


				       </select>

				    </div>
				  </div>



				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Input</button>
				    </div>
				  </div>
				</form>

			</div>

			<div class="col-md-6 col-sm-12 bd3">

				<h5>Edit Student Info:</h5>
				<form action="./php/brac_admin(edit)_processor.php" method="get" class="form-horizontal">
				  <div class="form-group">
				    <label for="edit-id" class="col-sm-2 control-label">ID</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="edit_id" id="edit_id" placeholder="ID" required>
				    </div>
				  </div>
				  <!-- <div class="form-group">
				    <label for="edit-name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="edit_name" id="edit_name" placeholder="Name">
				    </div>
				  </div> -->
				  <div class="form-group">
				    <label for="edit-semester edit-year" class="col-sm-2 control-label">Enrolled</label>
				    <div class="col-sm-4">
				      <select class="form-control" name="edit_semester" id="edit_semester" required>
				      		<option value="" selected disabled>Semester</option>
				          <option value="Spring">Spring</option>
				          <option value="Summer">Summer</option>
				          <option value="Autumn">Autumn</option>

				        </select>
				    </div>
				    <div class="col-sm-4">
				      <select class="form-control" name="edit_year" id="edit_year" required>
				      		<option value="" selected disabled>Year</option>
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
				    <label for="edit-school" class="col-sm-2 control-label">School</label>
				    <div class="col-sm-3">
				      <select class="form-control" name="edit_school" id="edit_school" required>
				      		<option value="" selected disabled>School</option>
				          <option value="isb">isb</option>
				          <option value="secs">secs</option>
				          <option value="sesm">sesm</option>
				          <option value="slas">slas</option>
				          <option value="sph">sph</option>
				          <option value="sls">sls</option>

				        </select>
				    </div>
				    <label for=edit-dept class="col-sm-2 control-label">Dept</label>
				    <div class="col-sm-5">
				      <select class="form-control" name="edit_dept" id="edit_dept" required>
				      		<option value="" selected disabled>Dept</option>
				          <option value="computer science & engineering">Computer Science & Engineering</option>
				          <option value="electrical & electronic engineering">Electrical & Electronic Engineering</option>
				          <option value="physical sciences">Physical Sciences</option>
				          <option value="environmental science and management">Environmental Science And Management</option>
				          <option value="liberal arts and social sciences">Liberal Arts and Social Sciences</option>
				          <option value="business">Business</option>
				          <option value="english">English</option>
				          <option value="life science">Life Science</option>
				          <option value="law">Law</option>
				          <option value="pharmacy">Pharmacy</option>

				        </select>
				    </div>
				  </div>



					<div class="form-group">
				    <label for="edit-major" class="col-sm-2 control-label">Major</label>
				    <div class="col-sm-10">
				      <select class="form-control" name="edit_major" id="edit_major" required>
			      		<option value="" selected disabled>Major</option>
			          <option value="B.Sc. in Computer Engineering (CEN)">B.Sc. in Computer Engineering (CEN)</option>
			          <option value="B.Sc. in Computer Science (CSC)">B.Sc. in Computer Science (CSC)</option>
			          <option value="B.Sc. in Computer Science & Engineering (CSE)">B.Sc. in Computer Science & Engineering (CSE)</option>
			          <option value="B.Sc. in EEE">B.Sc. in EEE</option>
			          <option value="B.Sc. in ETE">B.Sc. in ETE</option>
			          <option value="B.Sc. in Physics">B.Sc. in Physics</option>
			          <option value="B.Sc. in Mathematics">B.Sc. in Mathematics</option>
			          <option value="B.Sc. in Environmental Science">B.Sc. in Environmental Science</option>
			          <option value="B.Sc in Environmental Management">B.Sc in Environmental Management</option>
			          <option value="B.Sc in Population Environment">B.Sc in Population Environment</option>
			          <option value="BBA in International Business">BBA in International Business</option>
			          <option value="BBA in Management And Information System">BBA in Management And Information System</option>
			          <option value="BBA in Human Resources Management">BBA in Human Resources Management</option>
			          <option value="B.A. in English Literature">B.A. in English Literature</option>
			          <option value="B.A. in English Language Teaching">B.A. in English Language Teaching</option>
			          <option value="Bachelor of Law">Bachelor of Law</option>
			          <option value="Bachelor of Social Science">Bachelor of Social Science</option>
			          <option value="Bachelors in Anthropology">Bachelors in Anthropology</option>
			          <option value="Bachelors in Sociology">Bachelors in Sociology</option>
			          <option value="Bachelors in Global Studies & Governance">Bachelors in Global Studies & Governance</option>
			          <option value="Bachelor of Pharmacy">Bachelor of Pharmacy</option>
			          <option value="B.Sc in Microbiology">B.Sc in Microbiology</option>
			          <option value="B.Sc in Biochemistry">B.Sc in Biochemistry</option>

				       </select>

				    </div>
				  </div>



				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Edit and Save</button>
				    </div>
				  </div>
				</form>

			</div>
			<br>
			<div class="col-md-12 col-sm-12 bd2">

				<h5>Delete Student Info by ID:</h5>
				<form action="./php/brac_admin(delete_by_id)_processor.php" method="get" class="form-horizontal">
				  <div class="form-group">
				    <label for="id" class="col-sm-2 control-label">ID</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="delete_id" id="delete_id" placeholder="ID">
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Delete</button>
				    </div>
				  </div>
				</form>
				<hr>
				


			</div>
			</div>
		</div>



</body>
