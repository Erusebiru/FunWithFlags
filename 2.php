<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>td{border:1px solid black;}</style>
</head>
<body>
	<?
		$conn = mysqli_connect('localhost','ruben','ruben123');
		mysqli_select_db($conn, 'world');

		$consulta = "SELECT city.Name as city, country.Name as country
					FROM city, country
					WHERE city.CountryCode = '".$_POST['pais']."'
					AND city.CountryCode = country.Code";
		$resultat = mysqli_query($conn, $consulta);
		echo "\t<table>";
		echo "\t\t<tr>";
		echo "\t\t\t<td><b>Ciudad</b></td>";
		echo "\t\t\t<td><b>Pais</b></td>";
		while( $registre = mysqli_fetch_assoc($resultat) )
 		{
 			echo "\t\t<tr>";
 			echo "\t\t\t<td>".$registre['city']."</td>";
 			echo "\t\t\t<td>".$registre['country']."</td>";
 			echo "\t\t</tr>";
 		}
 		echo "\t</table>";
	?>
</body>
</html>