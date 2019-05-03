<?php

session_start();

$Mail = isset($_POST['mail'])? $_POST['mail'] : "";
$password = isset($_POST['password'])? $_POST['password'] : "";



$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
$result = mysqli_query($db_handle,"SELECT * FROM acheteur WHERE Mail LIKE '$Mail'");
//regarder s'il y a de résultat
if($db_found){
	if (mysqli_num_rows($result) != 0 ) 
		{


		if($password != ""){
			//$sql = "SELECT * from 'acheteur' Where Mail_USer like '$Mail' and LIKE '$password'";
			$result = mysqli_query($db_handle, "SELECT * from acheteur Where Mail like '$Mail' and MDP LIKE '$password'");
			//echo "balise 4".'</br>';
			if (mysqli_num_rows($result) != 0) 
				{

					$row = mysqli_fetch_array($result);
					$ID_Connexion=$row['ID_User'];
					$_SESSION['ID'] = $ID_Connexion;
					echo "Mail de la connexion: ".$_SESSION['Mail'];

					// PENSEZ A REMPLACER LA LIGNE SUIVANTE PAR LA PAGE D ACCUEIL REDIRIGE APRES LA CONNEXION //
					header('Location: http://localhost/ECEbay/Categories.html');
				}
		else{
			// L un des parametres est inccorect
			echo "Password or Mail is incorrect";
			}
		}

		} else 
		{
	 	// L un des parametres est inccorect
		 echo "Password or Mail is incorrect";
		}
}else 
{
	echo "Database not found";
}



//fermer la connexion

mysqli_close($db_handle);


?>