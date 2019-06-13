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
	$university = $_GET["university"];
	$selectedDept = $_GET["dept"];
	$mjr1 = "";
	$mjr2 = "";
	$mjr3 = "";

	$major1 = "";
	$major2 = "";
	$major3 =	"";

	if($selectedDept == "computer science & engineering"){
		$mjr1 = "CEN";
		$mjr2 = "CSC";
		$mjr3 = "CSE";

		$major1 = "B.Sc. in Computer Engineering (CEN)";
		$major2 = "B.Sc. in Computer Science (CSC)";
		$major3 =	"B.Sc. in Computer Science & Engineering (CSE)";


	}
	elseif($selectedDept == "electrical & electronic engineering"){
		$mjr1 = "EEE";
		$mjr2 = "ETE";
		$mjr3 = "";

		$major1 = "B.Sc. in EEE";
		$major2 = "B.Sc. in ETE";
		$major3 =	"";


	}
	elseif($selectedDept == "physical sciences"){
		$mjr1 = "Maths";
		$mjr2 = "Physics";
		$mjr3 = "";

		$major1 = "B.Sc. in Physics";
		$major2 = "B.Sc. in Mathematics";
		$major3 =	"";

	}
	elseif($selectedDept == "environmental science and management"){
		$mjr1 = "ENV Science";
		$mjr2 = "ENV Management";
		$mjr3 = "Population ENV";

		$major1 = "B.Sc. in Environmental Science";
		$major2 = "B.Sc in Environmental Management";
		$major3 =	"B.Sc in Population Environment";

	}
	elseif($selectedDept == "liberal arts and social sciences"){
		$mjr1 = "Comm";
		$mjr3 = "SOC";
		$mjr2 = "ANT";

		$major1 = "BSS in Media & Communication";
		$major2 = "Bachelors in Anthropology";
		$major3 =	"Bachelors in Sociology";

	}
	elseif($selectedDept == "business"){
		$mjr1 = "IB";
		$mjr2 = "MIS";
		$mjr3 = "HRM";

		$major1 = "BBA in International Business";
		$major2 = "BBA in Management And Information System";
		$major3 =	"BBA in Human Resources Management";

	}
	elseif($selectedDept == "english"){
		$mjr1 = "ENG LIT";
		$mjr2 = "ENG LANG";
		$mjr3 = "";

		$major1 = "B.A. in English Literature";
		$major2 = "B.A. in English Language Teaching";
		$major3 =	"";

	}
	elseif($selectedDept == "life science"){
		$mjr1 = "Microbiology";
		$mjr2 = "BIO CHEM";
		$mjr3 = "";

		$major1 = "B.Sc in Microbiology";
		$major2 = "B.Sc in Biochemistry";
		$major3 =	"";

	}
	elseif($selectedDept == "law"){
		$mjr1 = "LAW";
		$mjr2 = "";
		$mjr3 = "";

		$major1 = "Bachelor of Law";
		$major2 = "";
		$major3 =	"";

	}
	elseif($selectedDept == "pharmacy"){
		$mjr1 = "Pharmacy";
		$mjr2 = "";
		$mjr3 = "";

		$major1 = "Bachelor of Pharmacy";
		$major2 = "";
		$major3 =	"";

	}

	// echo $selectedDept;
	// echo $mjr1; 
	// echo $mjr2;
	// echo $mjr3;
	// echo $major1;
	// echo $major2;
	// echo $major3;

	if($_GET["semester"]=="0" && $_GET["year"]=="0"){
		$sql_1 = "SELECT COUNT(*) FROM `student` WHERE `major` = '$major1' AND `dept` = '$selectedDept' AND `university` = '$university' ";
		$sql_2 = "SELECT COUNT(*) FROM `student` WHERE `major` = '$major2' AND `dept` = '$selectedDept' AND `university` = '$university'";
		$sql_3 = "SELECT COUNT(*) FROM `student` WHERE `major` = '$major3' AND `dept` = '$selectedDept' AND `university` = '$university'";
		

		$result_1 = mysqli_query($link,$sql_1);
		$result_2 = mysqli_query($link,$sql_2);
		$result_3 = mysqli_query($link,$sql_3);
		// $result_ewu = mysqli_query($link,$sql_ewu);
		// $result_nsu = mysqli_query($link,$sql_nsu);

		$row1 = mysqli_fetch_row($result_1);
		$row2 = mysqli_fetch_row($result_2);
		$row3 = mysqli_fetch_row($result_3);
		// $row_ewu = mysqli_fetch_row($result_ewu);
		// $row_nsu = mysqli_fetch_row($result_nsu);

		$val1 = $row1[0];
		$val2 = $row2[0];
		$val3 = $row3[0];
		// $ewu = $row_ewu[0];
		// $nsu = $row_nsu[0];

		// echo $iub ;
		// echo $aiub;
		// echo $brac;
		// echo $ewu;
		// echo $nsu;

	}
	elseif($_GET["semester"]=="0"){
		$year = $_GET["year"];
		$sql_1 = "SELECT COUNT(*) FROM `student` WHERE `year`= '$year' AND `major` = '$major1' AND `dept` = '$selectedDept' AND `university` = '$university' ";
		$sql_2 = "SELECT COUNT(*) FROM `student` WHERE `year`= '$year' AND `major` = '$major2' AND `dept` = '$selectedDept' AND `university` = '$university'";
		$sql_3 = "SELECT COUNT(*) FROM `student` WHERE `year`= '$year' AND `major` = '$major3' AND `dept` = '$selectedDept' AND `university` = '$university'";
		

		$result_1 = mysqli_query($link,$sql_1);
		$result_2 = mysqli_query($link,$sql_2);
		$result_3 = mysqli_query($link,$sql_3);
		// $result_ewu = mysqli_query($link,$sql_ewu);
		// $result_nsu = mysqli_query($link,$sql_nsu);

		$row1 = mysqli_fetch_row($result_1);
		$row2 = mysqli_fetch_row($result_2);
		$row3 = mysqli_fetch_row($result_3);
		// $row_ewu = mysqli_fetch_row($result_ewu);
		// $row_nsu = mysqli_fetch_row($result_nsu);

		$val1 = $row1[0];
		$val2 = $row2[0];
		$val3 = $row3[0];
		// $ewu = $row_ewu[0];
		// $nsu = $row_nsu[0];

		// echo $iub ;
		// echo $aiub;
		// echo $brac;
		// echo $ewu;
		// echo $nsu;

 
	}

	elseif($_GET["year"]=="0"){
		$semester = $_GET["semester"];
		$sql_1 = "SELECT COUNT(*) FROM `student` WHERE `semester`= '$semester' AND `major` = '$major1' AND `dept` = '$selectedDept' AND `university` = '$university' ";
		$sql_2 = "SELECT COUNT(*) FROM `student` WHERE `semester`= '$semester' AND `major` = '$major2' AND `dept` = '$selectedDept' AND `university` = '$university'";
		$sql_3 = "SELECT COUNT(*) FROM `student` WHERE `semester`= '$semester' AND `major` = '$major3' AND `dept` = '$selectedDept' AND `university` = '$university'";
		

		$result_1 = mysqli_query($link,$sql_1);
		$result_2 = mysqli_query($link,$sql_2);
		$result_3 = mysqli_query($link,$sql_3);
		// $result_ewu = mysqli_query($link,$sql_ewu);
		// $result_nsu = mysqli_query($link,$sql_nsu);

		$row1 = mysqli_fetch_row($result_1);
		$row2 = mysqli_fetch_row($result_2);
		$row3 = mysqli_fetch_row($result_3);
		// $row_ewu = mysqli_fetch_row($result_ewu);
		// $row_nsu = mysqli_fetch_row($result_nsu);

		$val1 = $row1[0];
		$val2 = $row2[0];
		$val3 = $row3[0];
		// $ewu = $row_ewu[0];
		// $nsu = $row_nsu[0];

		// echo $iub ;
		// echo $aiub;
		// echo $brac;
		// echo $ewu;
		// echo $nsu;

 
	}
	else{
		$year = $_GET["year"];
		$semester = $_GET["semester"];

		$sql_1 = "SELECT COUNT(*) FROM `student` WHERE `semester`= '$semester' AND `year` = '$year' AND `major` = '$major1' AND `dept` = '$selectedDept' AND `university` = '$university' ";
		$sql_2 = "SELECT COUNT(*) FROM `student` WHERE `semester`= '$semester' AND `year` = '$year' AND `major` = '$major2' AND `dept` = '$selectedDept' AND `university` = '$university'";
		$sql_3 = "SELECT COUNT(*) FROM `student` WHERE `semester`= '$semester' AND `year` = '$year' AND `major` = '$major3' AND `dept` = '$selectedDept' AND `university` = '$university'";
		

		$result_1 = mysqli_query($link,$sql_1);
		$result_2 = mysqli_query($link,$sql_2);
		$result_3 = mysqli_query($link,$sql_3);
		// $result_ewu = mysqli_query($link,$sql_ewu);
		// $result_nsu = mysqli_query($link,$sql_nsu);

		$row1 = mysqli_fetch_row($result_1);
		$row2 = mysqli_fetch_row($result_2);
		$row3 = mysqli_fetch_row($result_3);
		// $row_ewu = mysqli_fetch_row($result_ewu);
		// $row_nsu = mysqli_fetch_row($result_nsu);

		$val1 = $row1[0];
		$val2 = $row2[0];
		$val3 = $row3[0];

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
	<title>View</title>
	
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
			.navbar-inverse {

					/* background : #8585ad; */
				}

				.navbar-inverse.navbar-nav>li>a {
					color: white ;
				}
				.navbar.navbar-default{
					margin-bottom: 0;
				}
				h4{
					text-align: center;
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

  <nav class="navbar navbar-inverse ">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

		</div>
		<div class="collapse navbar-collapse" id="bs-nav-demo">
		<ul class="nav navbar-nav">
			
			<li><a href="brac_admin_view_graph.php">Compare</a></li>
			<li><a href="brac_admin_graph.php">View</a></li>
		</ul>

	</div>
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

      <div class="col-sm-4">
		      <select  class="form-control" name="university" id="university" required>
		      		<option value="" selected disabled>University</option>
		          <option value="iub">IUB</option>
		          <option value="aiub">AIUB</option>
		          <option value="brac">BRAC</option>
		          <option value="ewu">EWU</option>
		          <option value="nsu">NSU</option>
		          

		        </select>
		    </div>
      </div>


      <button type="submit" class="btn btn-default">Create Graph</button>
    </form>
    <br>
    <div class="row">
    	<div class="col-md-10 col-sm-12">
    		<h4><?php echo "Students of: ".$_GET["semester"]." ".$_GET["year"]." ".$_GET["dept"]." ".$_GET["university"]; ?></h4>
    	</div>
    </div>

		<div class = "row">
			<div id="chart" class = "col-md-10 col-sm-12">
				<canvas id="myChart" class = "chart-1"></canvas>
			</div>

		</div>
	</div>

	<script>
		var val1 = "<?php echo $val1; ?>";
		var val2 = "<?php echo $val2; ?>";
		var val3 = "<?php echo $val3; ?>";

		var val1i = Number(val1);
		var val2i = Number(val2);
		var val3i = Number(val3);

		var mjr1 = "<?php echo $mjr1 ?>";
		var mjr2 = "<?php echo $mjr2 ?>";
		var mjr3 = "<?php echo $mjr3 ?>";


		var myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Arial';
    Chart.defaults.global.defaultFontSize = 14;
    Chart.defaults.global.defaultFontColor = '#333333';

    var massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:[mjr1, mjr2, mjr3],
        datasets:[{
          label:'Students',
          data:[
            val1i,
            val2i,
            val3i,

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