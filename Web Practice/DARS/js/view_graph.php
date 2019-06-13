<?php 

header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$link = mysqli_connect($servername, $username, $password, $dbname);
// semester year dept
if(mysqli_connect_error()){
	die("Could not connect to db");
}
else{
	if($_GET["semester"]=="0" && $_GET["year"]=="0" && $_GET["dept"]=="0" ){


	}
	elseif($_GET["semester"]=="0" && $_GET["dept"]=="0" ){
		$year = $_GET["year"];
		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `year`= '$year'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `year`= '$year'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `year`= '$year'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `year`= '$year'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `year`= '$year'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$data = array($result_iub,$result_aiub,$result_brac,$result_ewu,$result_nsu);

		echo json_encode($data);


 
	}
	elseif($_GET["semester"]=="0" && $_GET["year"]=="0" ){
		$dept = $_GET["dept"];
		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `dept`= '$dept'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `dept`= '$dept'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `dept`= '$dept'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `dept`= '$dept'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `dept`= '$dept'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$data = array($result_iub,$result_aiub,$result_brac,$result_ewu,$result_nsu);

		echo json_encode($data);


	}
	elseif($_GET["year"]=="0" && $_GET["dept"]=="0" ){
		$semester = $_GET["semester"];

		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `semester`= '$semester'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `semester`= '$semester'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `semester`= '$semester'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `semester`= '$semester'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `semester`= '$semester'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$data = array($result_iub,$result_aiub,$result_brac,$result_ewu,$result_nsu);

		echo json_encode($data);


	}
	elseif($_GET["semester"]=="0"){


	}
	elseif($_GET["dept"]=="0"){


	}
	elseif($_GET["year"]=="0"){


	}
	else{


	}

}


 ?>
