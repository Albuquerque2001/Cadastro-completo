<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "netflix";
$conn = new mysqli($servername, $username, $password, $dbname); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DIRETOR: <br> 
		<?php

		$sql = "SELECT d.nome, d.idade, f.nome as nomefilme FROM diretor d INNER JOIN filme f ON d.id = f.id_diretor;";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		while ($row) {
			echo $row['nomefilme'].", ".$row['nome'].", ".$row['idade']."<br>";
			$row = $result->fetch_assoc();
		}

		?>
	</h1>
</body>
</html>