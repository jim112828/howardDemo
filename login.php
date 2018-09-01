<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- javascripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Member welcome</title>
</head>
<body>
	<nav class="navbar navbar-default ">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      	<img style="max-width:100px; margin-top: -7px;"
             src="logoinindex.png"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
    <form class="navbar-form  navbar-right" action="#">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>


	<div class="container">
		<h1>You Aleady Login</h1>
		<?php 
      
    
			$email = $_POST["email"];
			$password = $_POST["pwd"];

			echo "<h1>".$email."</h1>";
			echo "<h1>".$password."</h1>";


		?>

	</div>


</body>
</html>