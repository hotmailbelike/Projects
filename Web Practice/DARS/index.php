<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<title>LOG IN</title>
	<style>
		body {
		  background: url(img/login.jpg);
		  background-size: cover;
		  background-position: center; 
		    width: 100%;
		    height: 100%;
		}

		.header{
			/* background: #ebebe0; */
			padding-top: 3%;
			text-align: center;
		}

		.container{
			margin-top: 0;
			height: 430px;
			/* background: white; */
			/* background: #ebebe0; */
		}

		#id-head{
			/* color: white; */
		}

		#guest{
			color: black;
			font-size: small;
		}


	</style>
</head>
<body>
	<div class = "header">
		<h1>Welcome to DARS!</h1>
	</div>
	<div class="container">
		
		<form id = "form" action ="" method="get">
		  <div class="form-group">
		    <label for="id"><span id = "id-head">Your ID</span></label>
		    <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Enter ID" required>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" placeholder="Password" required>
		  </div>
		  <button type="submit" class="btn btn-dark">Log In</button>
		  <div>
		  	<br>
		  	<a href="guest.php"><span id="guest">Log In As Guest</span></a>
		  </div>
		</form>

	</div>
	


	<script type="text/javascript" src="./js/index_script.js"></script>
</body>
</html>