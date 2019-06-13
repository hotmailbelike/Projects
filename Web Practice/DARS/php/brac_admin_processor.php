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
 	$id = $_GET["id"];

	$semester = $_GET["semester"];
	$year = $_GET["year"];
	$school = $_GET["school"];
	$dept = $_GET["dept"];
	$major = $_GET["major"];
	$university = "brac";

	 $query = "INSERT INTO `student` (`id`, `semester`, `year`, `school`, `dept`, `major`,`university`) VALUES ('$id','$semester', '$year', '$school', '$dept', '$major','$university')";  
	 mysqli_query($link,$query);
	 // echo 'data submitted';

	 // header("refresh:0.0000000000000000000000000000000000000000000000000001;url=http://localhost/project/iub_admin.php?");

	 // mysqli_close($link);
}

?>

<!DOCTYPE html>
<html>
<head>
	<script>
		window.location.replace("http://localhost/project/brac_admin.php?");
	</script>
	<title>BRAC Admin</title>
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