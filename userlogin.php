<!-- jimmy html learn brootstrap -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- javascripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>User Login</title>
</head>
<body>
	<nav class="navbar navbar-default ">
  <div class="container-fluid">
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
	
	<div class="jumbotron">
		<img style="max-width:1000px;"src="elogo_top.png"></img>
    <div class="row">
      <div class="col-sm-6">
    <h1>哈佛學員專區</h1></div>
    <div class="col-sm-6">
    <form action="login.php" method="post">
  <div class="form-group">
    <label for="email">學號:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">密碼:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> 記住我</label>
  </div>
  <button type="submit" class="btn btn-default">確定</button>
  <button type="submit" formaction="signup.php" class="btn btn-default">註冊帳號</button>
</form>

</div>
</div> 
    <p>Digital Learning Center<br>英文考試專家．留學遊學權威</p> 
  </div>	
	
	

</div>
	
</body>
</html>