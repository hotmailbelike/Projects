<?php 

 error_reporting(0);
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
	// $year = $_GET["year"];
	// $sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `year`= '$year'";
	// $sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `year`= '$year'";
	// $sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `year`= '$year'";
	// $sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `year`= '$year'";
	// $sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `year`= '$year'";

	// $result_iub = mysqli_query($link,$sql_iub);
	// $result_aiub = mysqli_query($link,$sql_aiub);
	// $result_brac = mysqli_query($link,$sql_brac);
	// $result_ewu = mysqli_query($link,$sql_ewu);
	// $result_nsu = mysqli_query($link,$sql_nsu);

	// $row_iub = mysqli_fetch_row($result_iub);
	// $row_aiub = mysqli_fetch_row($result_aiub);
	// $row_brac = mysqli_fetch_row($result_brac);
	// $row_ewu = mysqli_fetch_row($result_ewu);
	// $row_nsu = mysqli_fetch_row($result_nsu);

	// $iub = $row_iub[0];
	// $aiub = $row_aiub[0];
	// $brac = $row_brac[0];
	// $ewu = $row_ewu[0];
	// $nsu = $row_nsu[0];

	// echo $iub ;
	// echo $aiub;
	// echo $brac;
	// echo $ewu;
	// echo $nsu;



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

	$row_iub = mysqli_fetch_row($result_iub);
	$row_aiub = mysqli_fetch_row($result_aiub);
	$row_brac = mysqli_fetch_row($result_brac);
	$row_ewu = mysqli_fetch_row($result_ewu);
	$row_nsu = mysqli_fetch_row($result_nsu);

	$iub = $row_iub[0];
	$aiub = $row_aiub[0];
	$brac = $row_brac[0];
	$ewu = $row_ewu[0];
	$nsu = $row_nsu[0];

	// echo $iub ;
	// echo $aiub;
	// echo $brac;
	// echo $ewu;
	// echo $nsu;

 
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

	$row_iub = mysqli_fetch_row($result_iub);
	$row_aiub = mysqli_fetch_row($result_aiub);
	$row_brac = mysqli_fetch_row($result_brac);
	$row_ewu = mysqli_fetch_row($result_ewu);
	$row_nsu = mysqli_fetch_row($result_nsu);

	$iub = $row_iub[0];
	$aiub = $row_aiub[0];
	$brac = $row_brac[0];
	$ewu = $row_ewu[0];
	$nsu = $row_nsu[0];

	// echo $iub ;
	// echo $aiub;
	// echo $brac;
	// echo $ewu;
	// echo $nsu;


		// echo json_encode($data);


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

		$row_iub = mysqli_fetch_row($result_iub);
		$row_aiub = mysqli_fetch_row($result_aiub);
		$row_brac = mysqli_fetch_row($result_brac);
		$row_ewu = mysqli_fetch_row($result_ewu);
		$row_nsu = mysqli_fetch_row($result_nsu);

		$iub = $row_iub[0];
		$aiub = $row_aiub[0];
		$brac = $row_brac[0];
		$ewu = $row_ewu[0];
		$nsu = $row_nsu[0];

		// echo json_encode($data);


	}
	elseif($_GET["semester"]=="0"){

		$dept = $_GET["dept"]; 
		$year = $_GET["year"];
		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `dept`= '$dept' AND `year` = '$year'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `dept`= '$dept' AND `year` = '$year'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `dept`= '$dept' AND `year` = '$year'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `dept`= '$dept' AND `year` = '$year'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `dept`= '$dept' AND `year` = '$year'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$row_iub = mysqli_fetch_row($result_iub);
		$row_aiub = mysqli_fetch_row($result_aiub);
		$row_brac = mysqli_fetch_row($result_brac);
		$row_ewu = mysqli_fetch_row($result_ewu);
		$row_nsu = mysqli_fetch_row($result_nsu);

		$iub = $row_iub[0];
		$aiub = $row_aiub[0];
		$brac = $row_brac[0];
		$ewu = $row_ewu[0];
		$nsu = $row_nsu[0];

	}
	elseif($_GET["dept"]=="0"){

		$semester = $_GET["semester"]; 
		$year = $_GET["year"];
		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `semester`= '$semester' AND `year` = '$year'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `semester`= '$semester' AND `year` = '$year'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `semester`= '$semester' AND `year` = '$year'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `semester`= '$semester' AND `year` = '$year'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `semester`= '$semester' AND `year` = '$year'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$row_iub = mysqli_fetch_row($result_iub);
		$row_aiub = mysqli_fetch_row($result_aiub);
		$row_brac = mysqli_fetch_row($result_brac);
		$row_ewu = mysqli_fetch_row($result_ewu);
		$row_nsu = mysqli_fetch_row($result_nsu);

		$iub = $row_iub[0];
		$aiub = $row_aiub[0];
		$brac = $row_brac[0];
		$ewu = $row_ewu[0];
		$nsu = $row_nsu[0];

	}
	elseif($_GET["year"]=="0"){

		$semester = $_GET["semester"]; 
		$dept = $_GET["dept"];
		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `semester`= '$semester' AND `dept` = '$dept'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `semester`= '$semester' AND `dept` = '$dept'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `semester`= '$semester' AND `dept` = '$dept'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `semester`= '$semester' AND `dept` = '$dept'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `semester`= '$semester' AND `dept` = '$dept'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$row_iub = mysqli_fetch_row($result_iub);
		$row_aiub = mysqli_fetch_row($result_aiub);
		$row_brac = mysqli_fetch_row($result_brac);
		$row_ewu = mysqli_fetch_row($result_ewu);
		$row_nsu = mysqli_fetch_row($result_nsu);

		$iub = $row_iub[0];
		$aiub = $row_aiub[0];
		$brac = $row_brac[0];
		$ewu = $row_ewu[0];
		$nsu = $row_nsu[0];

	}
	else{

		$semester = $_GET["semester"]; 
		$dept = $_GET["dept"];
		$year = $_GET["year"];
		$sql_iub = "SELECT COUNT(`name`) FROM `iub_student` WHERE `semester`= '$semester' AND `dept` = '$dept' AND `year` = '$year'";
		$sql_aiub = "SELECT COUNT(`name`) FROM `aiub_student` WHERE `semester`= '$semester' AND `dept` = '$dept' AND `year` = '$year'";
		$sql_brac = "SELECT COUNT(`name`) FROM `brac_student` WHERE `semester`= '$semester' AND `dept` = '$dept' AND `year` = '$year'";
		$sql_ewu = "SELECT COUNT(`name`) FROM `ewu_student` WHERE `semester`= '$semester' AND `dept` = '$dept' AND `year` = '$year'";
		$sql_nsu = "SELECT COUNT(`name`) FROM `nsu_student` WHERE `semester`= '$semester' AND `dept` = '$dept' AND `year` = '$year'";

		$result_iub = mysqli_query($link,$sql_iub);
		$result_aiub = mysqli_query($link,$sql_aiub);
		$result_brac = mysqli_query($link,$sql_brac);
		$result_ewu = mysqli_query($link,$sql_ewu);
		$result_nsu = mysqli_query($link,$sql_nsu);

		$row_iub = mysqli_fetch_row($result_iub);
		$row_aiub = mysqli_fetch_row($result_aiub);
		$row_brac = mysqli_fetch_row($result_brac);
		$row_ewu = mysqli_fetch_row($result_ewu);
		$row_nsu = mysqli_fetch_row($result_nsu);

		$iub = $row_iub[0];
		$aiub = $row_aiub[0];
		$brac = $row_brac[0];
		$ewu = $row_ewu[0];
		$nsu = $row_nsu[0];

	}

}

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
	<title>Guest</title>
	<style>
		body {
		  background: url(img/view_graph.jpg);
		  background-size: cover;
		  background-position: center; 
		    width: 100%;
		    height: 100%;
		}
		.container{
			/* background: #f5f5ef; */
		}
		/* .col-md-6 {
			
   		border: #f2f2f2 solid 0.5px;
    	color: #f2f2f2;
    
		} */
		#menu {
		  position: fixed;
		  right: 0;
		  top: 50%;
		  width: 8em;
		  margin-top: -2.5em;

		}
		ul li a{
			color: #333333;
		}
			
		#semester{
			width: 200px;
		}

		#year{
			width: 200px;
		}
		
	</style>

</head>
<body>
	
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">Log Out</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

	<div class = "container">
    <form method="get" class="form-inline">
      <div class="form-group">
		    <div class="col-sm-4">
		      <select class="form-control" name="semester" id="semester">
	      		<option value="0">Semester</option>
	          <option value="Spring">Spring</option>
	          <option value="Summer">Summer</option>
	          <option value="Autumn">Autumn</option>

		      </select>
		    </div>

      </div>

      <div class="form-group">

        <div class="col-sm-4">
				      <select class="form-control" name="year" id="year">
				      		<option value="0">Year</option>
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

        <div class="col-sm-4">
				      <select class="form-control" name="dept" id="dept">
				      		<option value="0">Dept</option>
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

      <button type="submit" class="btn btn-default">Create Graph</button>
    </form>
    <br>

		<div class = "row">
			<div id="chart" class = "col-md-10 col-sm-12">
				<canvas id="myChart" class = "chart-1"></canvas>
			</div>

		</div>
	</div>
	<!-- <script type="text/javascript" src="./js/chart_script.js"></script> -->
	<script>
		var iub = "<?php echo $iub; ?>";
		var aiub = "<?php echo $aiub; ?>";
		var nsu = "<?php echo $nsu; ?>";
		var brac = "<?php echo $brac; ?>";
		var ewu = "<?php echo $ewu; ?>";

		var iubi = Number(iub);
		var aiubi = Number(aiub);
		var nsui = Number(nsu);
		var braci = Number(brac);
		var ewui = Number(ewu);

		var myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Arial';
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontColor = '#333333';

    var massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['IUB', 'AIUB', 'NSU', 'BRAC', 'EWU'],
        datasets:[{
          label:'Students',
          data:[
            iubi,
            aiubi,
            nsui,
            braci,
            ewui,
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:1,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        // title:{
        //   display:true,
        //   text:'Largest Cities In Massachusetts',
        //   fontSize:18
        // },
        // legend:{
        //   display:true,
        //   position:'right',
        //   labels:{
        //     fontColor:'#000'
        //   }
        // },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
	</script>

	
	
</body>
</html>