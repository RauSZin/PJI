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
  	margin-top:0%;
  	font-family: 'Montserrat', sans-serif;
  /*  background:url("imagem/aurora.jpg"); 
    background-repeat: no-repeat;
    background-position: right;
    background-size:cover;
    background-attachment:fixed;*/
}
  .navbar-inverse{
    border-radius:0;
  }
#cont1{
	color:white;
	background-color: #001870;
	margin-top:-1.3%;
}
#cont2{
	color:black;
	background-color:white; 

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
					<li><a href="forum.php">Forum</a></li>
          <li><a href="pesquisa.php">Pesquisa</a></li>
          <li class="active"><a href="login.php">Logar</a></li>
        </ul>
      </div>
    </div>
  </nav>
	<div id="cont1">

		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="page-header">
					<center><h3>Login</h3>
					</div>
					<div class="col-lg-4 col-md-4">

					</div>
					<div class="col-lg-4 col-md-4">
						<form>

							<div class="form-group">
								<label for="Prontuário" >Prontuário:</label>
								<input class="form-control" type="text" id="Prontuário" name="pront"><br>
								<label for="senha">Senha:</label>
								<input type="password" class="form-control" id="senha" name="senha">
								<br>
								<center><button type="submit" class="btn btn-default" style="background-color: black; color: white; border-color:black"value="Entrar"> Entrar
								</button></center>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
		</div>
		<div id="cont2">

			<br>
			<br>
			<div class="container" style="col">
				<div class="row">
					<div class="page-header">
						<center><h3>Cadastro</h3>
						</div>
						<div class="col-lg-4 col-md-4">
						</div>
						<div class="col-lg-4 col-md-4">
							<form>

								<div class="form-group">
									<label for="Prontuário">Email:</label>
									<input class="form-control" type="text" id="Prontuário" name="pront"><br>
									<label for="senha">Senha:</label>
									<input type="password" class="form-control" id="senha" name="senha">
									<br>
									<center><button type="submit" class="btn btn-success" value="Entrar"> Cadastrar
									</button></center>

								</div>
							</form>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">

						</div>
					</div>
				</div>
				<br>
			<br>
			<br>
			<br>
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