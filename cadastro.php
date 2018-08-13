<?php

session_start();

include 'connection.php';

$modo = "";
if (isset ($_POST['modo'])) {
	$modo = $_POST['modo'];
}

$_SESSION["login"] = "";
if (isset($_POST['login'])) {
	$_SESSION["login"] = $_POST['login'];
}

$_SESSION["senha"] = "";
if (isset($_POST['senha'])) {
	$_SESSION["senha"] = $_POST['senha'];
}

$_SESSION["nomeCompleto"] = "";
if (isset($_POST['nomeCompleto'])) {
	$_SESSION["nomeCompleto"] = $_POST['nomeCompleto'];
}

$_SESSION["email"] = "";
if (isset($_POST['email'])) {
	$_SESSION["email"] = $_POST['email'];
}

$_SESSION["cpf"] = "";
if (isset($_POST['cpf'])) {
	$_SESSION["cpf"] = $_POST['cpf'];
}

$_SESSION["rg"] = "";
if (isset($_POST['rg'])) {
	$_SESSION["rg"] = $_POST['rg'];
}

$_SESSION["dataNascimento"] = "";
if (isset($_POST['dataNascimento'])) {
	$_SESSION["dataNascimento"] = $_POST['dataNascimento'];
}

$_SESSION["idade"] = 0;
if (isset($_POST['idade'])) {
	$_SESSION["idade"] = $_POST['idade'];
}

$_SESSION["nomePai"] = "";
if (isset($_POST['nomePai'])) {
	$_SESSION["nomePai"] = $_POST['nomePai'];
}

$_SESSION["nomeMae"] = "";
if (isset($_POST['nomeMae'])) {
	$_SESSION["nomeMae"] = $_POST['nomeMae'];
}


if ($modo == 'inserir') {
	$sql = "INSERT INTO cadastro (login, senha, nomeCompleto, email, cpf, rg, dataNascimento, idade, nomePai, nomeMae) 
	VALUES ('".$_SESSION["login"]."', '".$_SESSION["senha"]."', '".$_SESSION["nomeCompleto"]."',
	'".$_SESSION["email"]."', '".$_SESSION["cpf"]."', '".$_SESSION["rg"]."', '".$_SESSION["dataNascimento"]."', 
	'".$_SESSION["idade"]."', '".$_SESSION["nomePai"]."', '".$_SESSION["nomeMae"]."')";
	$result = $conn->query($sql);
	if($result){
		echo "<script> alert('Cadastro realisado com sucesso!'); window.location = 'index.php'; </script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<body id="body">
	<div class="caixa-cadastro">
		<form method="post" action="cadastro.php">
			<div class="img">
				<img src="Assets/1280px-Ecomp-Poli-UPE_logo.svg.png" alt="logo" width="46%">
			</div>
			<h2>Cadastro</h2>
			<label>Nome completo: </label>
			<input type="text" name="nomeCompleto" placeholder="Digite seu nome completo" required>
			<br>
			<br>
			<label>Email: </label>
			<input type="text" name="email" placeholder="nome@example.com" required>
			<br>
			<br>
			<label>CPF: </label>
			<input type="text" name="cpf" placeholder="Digite seu CPF" required>
			<br>
			<br>
			<label>RG: </label>
			<input type="text" name="rg" placeholder="Digite sua RG" required>	
			<br>
			<br>
			<label>Data de nascimento: </label>
			<input type="text" name="dataNascimento" placeholder="dd/mm/aaaa" required>	
			<br>
			<br>
			<label>Idade: </label>
			<input type="text" name="idade" placeholder="Digite sua idade" required>	
			<br>
			<br>
			<label>Nome do pai: </label>
			<input type="text" name="nomePai" placeholder="Digite o nome do seu pai" required>	
			<br>
			<br>
			<label>Nome da mãe: </label>
			<input type="text" name="nomeMae" placeholder="Digite o nome da sua mãe" required>	
			<br>
			<br>
			<label>Login: </label>
			<input type="text" name="login" placeholder="Digite seu login" required>	
			<br>
			<br>
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Digite sua senha" required>	
			<br>
			<br>
			<input type="submit" value="Cadastrar">
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
	</script>

</body>
</html>
<style type="text/css">
.caixa-cadastro{
	background: linear-gradient(lightgray, 	gray);
	border: solid black 5px;
	margin-top: 1%;
	padding-left: 2%;
	padding-bottom: 1%;
	margin-left: 35%;
	margin-right: 35%;
}
.img{
	text-align: center;
	margin-bottom: 1%;
	margin-top: 3%;
}
.Footpage{
	margin-top: 2%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>