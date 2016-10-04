
<!DOCTYPE html>
<html>
	<head>
       <a href="index.php">Index</a>
       <a href="listAtelier.php">Liste des ateliers</a>
       <a href="addModAtelier.php">Ajout d'un nouvel atelier</a>
	</head>

	<body>
		<?php 
                   //paramètre de connexion à la BDD
                     $host = 'localhost';
                     $bdd = 'CDP_BDD';
                     $user = 'root';
                     $passwd = 'password';
                     // Connexion au serveur
                     $conn = mysqli_connect($host,$user,$passwd,$bdd) or die('Error connecting to databse');           
			//Pour récupéré les noms des laboratoires 
			
                     $queryLab = "SELECT nom FROM laboratoires";
			$resultLab = mysqli_query($conn,$queryLab);

			if(empty($_POST)) { //ça veut dire qu'on veut ajouter un atelier
				echo "<h1> Ajout d'un nouvel atelier </h1>";
				$modif = 0;
			
			} else { //Sinon modif
			
				echo "<h1> Modification d'un atelier existant</h1>";
				$modif = 1;
				
				// Creation et envoi de la requete                     // 
                            $query = "SELECT * FROM ateliers WHERE id=$_POST[id]";

				$result = mysqli_query($conn,$query);
                            $row = mysqli_fetch_row($result);

			}
		?>
		<form method="post" action="traitement.php">

			<label for="titre">Titre de l'atelier</label>
			
			<input type="text" name="titre" id="titre" 
			<?php  
       			if($modif == 1) {
       				echo "value=\"$row[1]\"";
       			}
       		?>
			 />       		
       		<br />
			
			<label for="theme">Theme de l'atelier</label>
       		<input type="text" name="theme" id="theme" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[2]\"";
       			}
       		?>
       		/>  


       		<br />     	

       		<label for="type">Type de l'atelier</label>
       		<input type="text" name="type" id="type" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[3]\"";
       			}
       		?>
       		/>   

       		<br />

<!-- A TRAVAILLER, on peut faire une requête pour faire un petit menu déroulant
qui proposera uniquement les laboratoire existant -->
       		<label for="type">Laboratoire</label>
       		<input type="text" name="type" id="type" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[4]\"";
       			}
       		?>
       		/>   

       		<br />

       		<label for="lieu">Lieu </label>
       		<input type="text" name="lieu" id="lieu" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[5]\"";
       			}
       		?>
       		/>   

       		<br />

       		<label for="duree">Durée </label>
       		<input type="text" name="duree" id="duree" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[6]\"";
       			}
       		?>
       		/>   

       		<br />

       		<label for="capacite">Capacité </label>
       		<input type="text" name="capacite" id="capacite" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[7]\"";
       			}
       		?>
       		/>  

       		<br />

       		<label for="horaire">Horaire </label>
       		<input type="text" name="horaire" id="horaire" 
       		<?php  
       			if($modif == 1) {
       				echo "value=\"$row[8]\"";
       			}
       		?>
       		/>   

       		<br />


       		<!-- Bouton d'envoi -->
			<input type="submit" value="Envoyer" />
		</form>
	</body>
</html> 