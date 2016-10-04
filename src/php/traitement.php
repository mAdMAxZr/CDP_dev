<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
<p>Nous avons bien pris en compte la modification effectuer</p> <br />

<?php


/**
 * Ici il faut tester le fait que les utilisateurs ne mettent pas des trucs inutiles 
 */

foreach($_POST as $key => $value){
	echo "<p> La clé est : $key --> $value </p><br /> ";
}
?> 
	</body>
</html> 
