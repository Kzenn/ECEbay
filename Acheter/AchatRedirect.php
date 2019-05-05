<?php

session_start();

$NCarte = isset($_POST['Ncarte'])? $_POST['Ncarte'] : "";
$PIN = isset($_POST['PIN'])? $_POST['PIN'] : "";
$DateExpiration = isset($_POST['DateExpiration'])? $_POST['DateExpiration'] : "";
$ID_Session=$_SESSION['ID'];


$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
$result = mysqli_query($db_handle,"SELECT * FROM acheteur WHERE ID LIKE '$ID_Session'");
//regarder s'il y a de résultat
if($db_found){
 
			$result = mysqli_query($db_handle, "SELECT * from acheteur Where ID LIKE '$ID_Session' and NCarte like '$NCarte' and PIN LIKE '$PIN' and Expiration like '$DateExpiration'");
				if (mysqli_num_rows($result) != 0) 
					{

						$row = mysqli_fetch_array($result);
						echo "Mail de la connexion: ".$_SESSION['Mail'];

						// PENSEZ A REMPLACER LA LIGNE SUIVANTE PAR LA PAGE D ACCUEIL REDIRIGE APRES LA CONNEXION //
						//header('Location: http://localhost/ECEbay/Categories.html');
					}
		else{
			// L un des parametres est inccorect
			echo "Information bancaires incorrectes";
			}
}else 
{
	echo "Database not found";
}



//fermer la connexion

mysqli_close($db_handle);


?>