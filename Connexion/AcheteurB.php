<?php

session_start();

$Mail = isset($_POST['mail'])? $_POST['mail'] : "";
$password = isset($_POST['password'])? $_POST['password'] : "";



$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//echo "balise 0".'</br>';



/*if ($_POST["button"]) {
	if ($db_found) 
		{//echo "balise 1".'</br>';
		$sql = "Select * from 'acheteur'";
	}
	if($Mail != ''){
		//echo "balise 2".'</br>';
	$sql .= " Where Mail_User like '$Mail'";

	}*/

/*$result = mysqli_query($db_handle, "SELECT * FROM `produit` ORDER BY `Mail_Produit` DESC LIMIT 1");
$row = mysqli_fetch_array($result);
$Mailmax=$row['Mail_Produit']; 

	
	while($data = mysqli_fetch_assoc($result)) 
		{
		//echo "balise 2.5 ".'</br>';
		echo "Mail:" .$data['Mail_User'].'<br>';
		}//end while*/

//$sql = "SELECT * FROM acheteur WHERE Mail_User LIKE '$Mail'";		
$result = mysqli_query($db_handle,"SELECT * FROM acheteur WHERE Mail LIKE '$Mail'");
//regarder s'il y a de résultat
if($db_found){
	if (mysqli_num_rows($result) != 0 ) 
		{
		//on a trouve l'Mail dans la base de donnee
		//$sql = "SELECT * from 'acheteur'";
		//echo "balise 3".'</br>';

		if($password != ""){
			//$sql = "SELECT * from 'acheteur' Where Mail_USer like '$Mail' and LIKE '$password'";
			$result = mysqli_query($db_handle, "SELECT * from acheteur Where Mail like '$Mail' and MDP LIKE '$password'");
			//echo "balise 4".'</br>';
			if (mysqli_num_rows($result) != 0) 
				{
					//echo "balise 5".'</br>';
					//alert("connexion successful");
					//$result2 = mysqli_query($db_handle, "SELECT * FROM acheteur Where Mail_USer like '$Mail' and MDP like '$password'");
					$row = mysqli_fetch_array($result);
					$ID_Connexion=$row['ID_User'];
					$_SESSION['ID'] = $ID_Connexion;
					echo "Mail de la connexion: ".$_SESSION['Mail'];

					// PENSEZ A REMPLACER LA LIGNE SUIVANTE PAR LA PAGE D ACCUEIL REDIRIGE APRES LA CONNEXION //
					header('Location: http://localhost/ECEbay/Compte.php');
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