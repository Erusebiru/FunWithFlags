<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	select.icon-menu option{
		background-repeat:no-repeat;
background-position:bottom left;
padding-left:30px;
	}
	</style>
</head>
<body>
	<?
		$conn = mysqli_connect('localhost','ruben','ruben123');
		mysqli_select_db($conn, 'world');
		$consulta = "SELECT * FROM country;";
		$resultat = mysqli_query($conn, $consulta);

		if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}
 		echo "\t<form method='post' action='2.php' name='form'>";
		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
 			?>
 			<label><input type="radio" name='pais' value='<?=$registre['Code']?>'><img src="images/<?=$registre['Name']?>.png" width="20px" height="15px"><?=$registre['Name']?></label><br><?

 		}
 		echo "\t\t<input type='submit' name='submit' value='enviar'>";
 		echo "\t</form>";
	?>

</body>

</html>