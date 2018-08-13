<?php 
session_start();
include 'connection.php';

$loginEdit = $_SESSION["login"];
$senhaEdit = $_SESSION["senha"];
$nomeCompletoEdit = $_SESSION["nomeCompleto"];
$emailEdit = $_SESSION["email"];
$cpfEdit = $_SESSION["cpf"];
$dataNascimentoEdit = $_SESSION["dataNascimento"];
$rgEdit = $_SESSION["rg"];
$idadeEdit = $_SESSION["idade"];
$nomeMaeEdit = $_SESSION["nomeMae"];
$nomePaiEdit = $_SESSION["nomePai"];


$modoEdit = "";
if (isset ($_POST['modoEdit'])) {
	$modoEdit = $_POST['modoEdit'];
}

if (isset($_POST['nomeCompletoEdit'])) {
	$nomeCompleto = $_POST['nomeCompletoEdit']; 
} else {
	$nomeCompleto = $nomeCompletoEdit;
}

if (isset($_POST['emailEdit'])) {
	$email = $_POST['emailEdit'];
} else {
	$email = $emailEdit;
}

if (isset($_POST['cpfEdit'])) {
	$cpf = $_POST['cpfEdit'];
} else {
	$cpf = $cpfEdit;
}

if (isset($_POST['rgEdit'])) {
	$rg = $_POST['rgEdit'];
} else {
	$rg = $rgEdit;
}

if (isset($_POST['dataNascimentoEdit'])) {
	$dataNascimento = $_POST['dataNascimentoEdit'];
} else {
	$dataNascimento = $dataNascimentoEdit;
}

if (isset($_POST['idadeEdit'])) {
	$idade = $_POST['idadeEdit'];
} else {
	$idade = $idadeEdit;
}

if (isset($_POST['nomePai'])) {
	$nomePai = $_POST['nomePai'];
} else {
	$nomePai = $nomePaiEdit;
}

if (isset($_POST['nomeMaeEdit'])) {
	$nomeMae = $_POST['nomeMaeEdit'];
} else {
	$nomeMae = $nomeMaeEdit;
}


if ($modoEdit == 'inserir') {
	$sql = "UPDATE cadastro SET nomeCompleto = '$nomeCompleto', email = '$email', cpf = '$cpf', rg = '$rg', 
	dataNascimento = '$dataNascimento', idade = '$idade',  nomePai = '$nomePai', nomeMae = '$nomeMae' 
	WHERE login = '$loginEdit' AND senha = '$senhaEdit'";
	if ($conn->query($sql)) {
		echo "<script> alert('Edição bem sucedida!'); window.location = 'index.php';</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body id="body">
	<div class="caixa-cadastro">
		<form method="post" action="editar.php">
			<div class="img">
				<img src="Assets/1280px-Ecomp-Poli-UPE_logo.svg.png" alt="logo" width="46%">
			</div>
			<h2>Editar cadastro</h2>
			<label>Nome completo: </label>
			<input type="text" name="nomeCompletoEdit" placeholder="Digite seu nome completo" required>
			<br>
			<br>
			<label>Email: </label>
			<input type="text" name="emailEdit" placeholder="nome@example.com" required>
			<br>
			<br>
			<label>CPF: </label>
			<input type="text" name="cpfEdit" placeholder="Digite seu CPF" required>
			<br>
			<br>
			<label>RG: </label>
			<input type="text" name="rgEdit" placeholder="Digite sua RG" required>	
			<br>
			<br>
			<label>Data de nascimento: </label>
			<input type="text" name="dataNascimentoEdit" placeholder="dd/mm/aaaa" required>	
			<br>
			<br>
			<label>Idade: </label>
			<input type="text" name="idadeEdit" placeholder="Digite sua idade" required>	
			<br>
			<br>
			<label>Nome do pai: </label>
			<input type="text" name="nomePaiEdit" placeholder="Digite o nome do seu pai" required>	
			<br>
			<br>
			<label>Nome da mãe: </label>
			<input type="text" name="nomeMaeEdit" placeholder="Digite o nome da sua mãe" required>	
			<br>
			<br>
			<input type="submit" value="Editar">
			<input type="hidden" name="modoEdit" id="modo" value="inserir">
		</form>
	</div>

	<div class="Footpage">
		R. Benfica, 455 - Madalena, Recife - PE, 50720-001
		<br>
		Telefone: (81) 3184-7500
	</div>


</body>
</html>

<style type="text/css">
body{
	background-color: slateblue;
}
.caixa-cadastro{
	background: linear-gradient(lightgray, 	gray);
	border: solid black 5px;
	margin-top: 2%;
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
	margin-top: 3%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>