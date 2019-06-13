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
	$id = $_GET["edit_id"];

	$semester = $_GET["edit_semester"];
	$year = $_GET["edit_year"];
	$school = $_GET["edit_school"];
	$dept = $_GET["edit_dept"];
	$major = $_GET["edit_major"];
	$university = "iub";

	$query = " UPDATE `student` SET `id` = '$id', `semester` = '$semester', `year` = '$year', `school` = '$school', `dept` = '$dept', `major` = '$major' WHERE (`student`.`university`='$university' AND `student`.`id` = '$id') ";

	mysqli_query($link,$query);


}


?>

<!DOCTYPE html>
<html>
<head>
	<script>
		window.location.replace("http://localhost/project/iub_admin.php?");
	</script>
	<title>IUB Admin</title>
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