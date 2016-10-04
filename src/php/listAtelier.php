<html>

	<head>
		<a href="index.php">Index</a>
       	<a href="listAtelier.php">Liste des ateliers</a>
		<a href="addModAtelier.php">Ajout d'un nouvel atelier</a>
	</head>

	<body>
		<h1>Listage des ateliers</h1>

		<br />

		<table>
			<tr>
				<td>id</td>
				<td>Titre</td>
				<td>Thème</td>
				<td>Type</td>
				<td>Laboratoire</td>
				<td>Lieu</td>
				<td>Durée</td>
				<td>Capacite</td>
				<td>Horaire</td>
			</tr>

			<?php

				//paramètre de connexion à la BDD
				$host = 'localhost';
				$bdd = 'CDP_BDD';
				$user = 'root';
				$passwd = 'password';
				// Connexion au serveur
				$conn = mysqli_connect($host,$user,$passwd,$bdd) or die('Error connecting to databse');		
			
				// Creation et envoi de la requete
				$query = "SELECT * FROM ateliers";

				$result = mysqli_query($conn,$query);

				
				//Remplissage du tableau automatiquement
				while($row = mysqli_fetch_row($result)){
					echo "<tr>";
					$id =0;
					foreach ($row as $value) {
						$id = $row[0];
						echo "<td>$value</td>";
					}
					echo "<td>";
					echo "<form method=\"post\" action=\"addModAtelier.php\">";
					echo "<input type=\"hidden\" name=\"id\" id=\"id\" value=\"$id\"/>";
					echo "<input type=\"submit\" value=\"modifier\" />";
					echo "</td>";
					echo "</tr>";
				}
			?>


		</table>

	</body>
</html>