<?php
include 'conection.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname); 

//Para login, usar 'select' ao invés de 'insert'
//Fazer página de login

$modo = "";
if (isset($_POST['modo'])) { 
	$modo = $_POST['modo'];
}

$login = "";
if(isset($_POST['login'])){
	$login = $_POST['login'];
}
$senha = "";
if(isset($_POST['senha'])){
	$senha = $_POST['senha'];
}

if ($modo == 'inserir') {
	$sql = "SELECT login, senha FROM cadastro WHERE login = '$login' AND senha = '$senha'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($row){
		header('Location: index.html');
	}
	else{
		echo "<script>alert('Login ou senha incorretos');</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<body id="body">
	<div class="caixa-cadastro">
		<form method="post" action="login.php">
			<!-- <h1>Login</h1> -->
			<div class="img">
				<img src="Assets/1280px-Ecomp-Poli-UPE_logo.svg.png" alt="logo" width="50%">
			</div>
			<h2>Login</h2>
			<label>Nome: </label>
			<input type="text" name="login" id="login" placeholder="Digite seu nome" required>
			<br>
			<br>
			<label>Senha: </label>
			<input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>	
			<br>
			<br>
			<input type="submit" value="Login">
			<input type="hidden" name="modo" id="modo" value="inserir">
		</form>
	</div>

	<div class="Footpage">
		R. Benfica, 455 - Madalena, Recife - PE, 50720-001
		<br>
		Telefone: (81) 3184-7500
	</div>

	<script src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$('#body').css('background-color', 'slateblue');
		// if(confirm ('r u sure?')){
		// 	document.getElementById('body').setAttribute('style', 'background-color: slateblue');
		// }
		// var x;
		// for(var i = 0; i < 10; i++){
		// 	console.log('javascript');
		// }

	</script>
</body>
</html>
<style type="text/css">
.caixa-cadastro{
	background: linear-gradient(lightgray, 	gray);
	border: solid black 5px;
	margin-top: 10%;
	text-align: center;
	padding-bottom: 1%;
	margin-left: 35%;
	margin-right: 35%;
}
.img{
	text-align: center;
	margin-bottom: 5%;
	margin-top: 3%;
}
.Footpage{
	margin-top: 11%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>