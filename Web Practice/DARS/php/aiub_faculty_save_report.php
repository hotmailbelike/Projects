<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$link = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()){
	die("Could not connect to db");
}
else{
	$programsOffered = $_GET["programsOffered"];
	$residentialFacilities = $_GET["residentialFacilities"];
	$systemOfStudentEnrollment = $_GET["systemOfStudentEnrollment"];
	$year = $_GET["year"];
	$annualTotalIntake = $_GET["annualTotalIntake"];
	$totalNumberOfStudents = $_GET["totalNumberOfStudents"];
	$male = $_GET["male"];
	$female = $_GET["female"];
	$fullTimeAndPartTime = $_GET["fullTimeAndPartTime"];
	$fullTime = $_GET["fullTime"];
	$partTime = $_GET["partTime"];
	$maleTeacher = $_GET["maleTeacher"];
	$femaleTeacher = $_GET["femaleTeacher"];
	$total = $_GET["total"];
	$officers = $_GET["officers"];
	$class = $_GET["class"];
	$gradYear = $_GET["gradYear"];
	$honor = $_GET["honor"];
	$post = $_GET["post"];
	$technical = $_GET["technical"];
	$hundredPercent = $_GET["hundredPercent"];
	$fifteenToSeventyPercent = $_GET["fifteenToSeventyPercent"];
	$avgTk = $_GET["avgTk"];
	$totalTk = $_GET["totalTk"];
	$recurringExpenses = $_GET["recurringExpenses"];
	$developmentExpenses = $_GET["developmentExpenses"];
$university = "aiub";

	 $query = " INSERT INTO `report` (`programs_offered`, `residential_facilities`, `system_of_student_enrollment`, `year`, `annual_total_intake`, `total_number_of_students`, `male`, `female`, `full_time_and_part_time`, `full_time`, `part_time`, `male_teacher`, `female_teacher`, `total`, `officers`, `class`, `graduating_year`, `honor_graduates`, `post_graduates`, `technical_graduates`, `hundred_percent`, `fifteen_to_seventy_percent`, `average_per_total_student`, `total_tk`, `recurring_expenses`, `development_expenses`,`university`) VALUES ('$programsOffered', '$residentialFacilities', '$systemOfStudentEnrollment', '$year', '$annualTotalIntake', '$totalNumberOfStudents', '$male', '$female', '$fullTimeAndPartTime', '$fullTime', '$partTime', '$maleTeacher', '$femaleTeacher', '$total', '$officers', '$class', '$gradYear', '$honor', '$post', '$technical', '$hundredPercent', '$fifteenToSeventyPercent', '$avgTk', '$totalTk', '$recurringExpenses', '$developmentExpenses','$university')";   
	 mysqli_query($link,$query);
	 // echo 'data submitted';

	 // header("refresh:0.0000000000000000000000000000000000000000000000000001;url=http://localhost/project/aiub_admin.php?");

	 // mysqli_close($link);
}

?>

<!DOCTYPE html>
<html>
<head>
	<script>
		window.location.replace("http://localhost/project/aiub_faculty_send_report.php");
	</script>
	<title>aiub Admin</title>
	<style>
		body {
		  background: url(https://talkaboutco.de/content/images/2018/04/steve-harvey-523112-unsplash.jpg?fbclid=IwAR3PzcxzE8xcnMmsONBeEntdkxDmwOUVTkuX5sYIxnH8Ecq-WEM0URoyOHg);
		  background-size: cover;
		  background-position: center; 
		    width: 100%;
		    height: 100%;
		}
	</style>
</head>
<body>

</body>
</html>