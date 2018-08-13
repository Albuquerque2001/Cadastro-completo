<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
</head>
<body>
	
	<div class="op">
		<div class="img">
			<img src="Assets/1280px-Ecomp-Poli-UPE_logo.svg.png" alt="logo" width="41%">
		</div>
		<div class="opções">

			<div class="index">
				<a href="index.php">Voltar para o início</a>
				<br>
				<br>
			</div>				
			
			<div class="login">
				<a href="index.html">Acessar o site</a>
				<br>
				<br>
				<img src="Assets/Captura de Tela (3).png" alt="site" width="60%">
			</div>	
		</div>
		<div class="lateral">

			<h1>Perfil:</h1>
			<h3> 
				<?php
				$loginp = $_SESSION['login'];
				$senhap = $_SESSION['senha'];

				$sql = "SELECT * FROM cadastro WHERE login='$loginp' AND senha='$senhap'";				
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				while ($row) {
					echo "Login: ".$row['login']."<br>";
					echo "Senha: ".$row['senha']."<br>";
					echo "Nome: ".$row['nomeCompleto']."<br>";
					echo "Email: ".$row['email']."<br>";
					echo "CPF: ".$row['cpf']."<br>";
					echo "RG: ".$row['rg']."<br>";
					echo "Data de nascimento:  ".$row['dataNascimento']."<br>";
					echo "Idade: ".$row['idade']."<br>";
					echo "Nome do pai: ".$row['nomePai']."<br>";
					echo "Nome da mãe: ".$row['nomeMae']."<br>";
					$row = $result->fetch_assoc();
				}
				?>
			</h3>
			<div class="cadastro">
				<a href="editar.php">Editar informações de perfil</a>
			</div>		
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
.login{
	margin-left: 6%;
}
.index{
	margin-left: 6%;
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
	margin-top: 7%;
	font-size: 17px;
	color: black;
	width: 100%;
	height: 100%;	
	background-color: lightgray;
	text-align: center;
}
</style>