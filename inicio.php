<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	
	<div class="op">
		<div class="img">
			<img src="Assets/1280px-Ecomp-Poli-UPE_logo.svg.png" alt="logo" width="41%">
		</div>
		<div class="opções">
			<div class="cadastro">
				<a href="cadastro.php">Cadastro</a>
			</div>
			<div class="login">
				<a href="login.php">Login</a>
			</div>	
		</div>
		<div class="lateral">
			<h1>Cadastre-se e tenha acesso ao conteúdo exclusivo da nossa faculdade</h1>
			<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>			
		</div>
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
	background: linear-gradient(lightblue, 	slateblue);
}
a:link, a:visited {
	background-color: ;
	border: solid green;
	color: black;
	font-size: 21px;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}
a:hover, a:active {
	background-color: green;
}
.img{
	margin: 2%;
	text-align: center;
}
.cadastro{
	margin: 6%;
}
.login{
	margin: 6%;
}
.opções{
	width: 50%;
	float: left;
	text-align: center;
}
.lateral{
	margin-left: 50%; 
	padding-right: 3%;
}
.Footpage{
	margin-top: 6%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>