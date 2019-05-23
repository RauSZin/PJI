<!DOCTYPE html>
<html>
<head>
	<title>Logar</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  <style>
  	@import url('https://fonts.googleapis.com/css?family=Montserrat');
  	body{
  		font-family: 'Montserrat', sans-serif;
  	}
  </style>
</head>
<body>
	

	<nav class="navbar navbar-default" style="border-radius:0">
		<div class="container-fluid">
			<!-- logo -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Help IF</a>
			</div>
			<!-- menu -->
			<div>
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="Creators.php">Creators</a></li>
					<li class="active"><a href="forum.php">Forum</a></li>
					<li><a href="pesquisa.php">Pesquisa</a></li>
					<li><a href="login.php">Logar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">

		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<form>
				<textarea class="form-control" style="resize: none; width:100%; height:120px;"></textarea>
				<br>
				<button class="btn btn-success">Postar</button>
			</form>
		</div>
	</div>




	<?php
	include 'rodape.php';
	?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>