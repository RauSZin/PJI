CREATE DATABASE pji;
USE pji;
CREATE TABLE usuario(
	id int(4) AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
	email VARCHAR (30),
	PRIMARY KEY (id)
);


aqui é o banco ^





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action='funcoesbanco.php'>
		<p> Nome: <input type="text" name="nome"></p>
		<p> Email: <input type="text" name="email"></p>
		<button type="submit">envia</button>
	</form>
</body>
</html>



aqui o formulário ^






<?php
$email = $_POST['email'];
$nome = $_POST['nome'];


	$servername = '';
	$username = 'root';
	$password = '';
	$database = 'pji';
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}else{
	echo 'Deu Certo';
}

$sql = "INSERT INTO usuario(id,nome,email) VALUES (null,'$nome','$email')";

if (mysqli_query($conn, $sql)) {
      echo "Criou";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



aqui é pra enviar pro banco ^