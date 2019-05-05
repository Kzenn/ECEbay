<?php
session_start();
//mettre les données recupérées  dans la base de données


$type = isset($_POST["type"])? $_POST["type"] : "";


   $dbname = "ecebay";
   $db_login = "root";
   $db_pass	= "";

$database= "ecebay";
//Rappel:votre serveur = localhost | votre login = root | votre mot de pass = ''(rien)
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$ID_Produit = isset($_POST["ID_Produit"])? $_POST["ID_Produit"] : "";
$ID_User=$_SESSION['ID'];

//inserer dans la table panier
		$bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", $db_login, $db_pass);
		$sql = "INSERT INTO panier (ID_User, ID_Produit1) VALUES('$ID_User', '$ID_Produit')";
		$bdd->query($sql);
		
		// Ce Lien renvoi a la page consulté precedement
		//header("location:javascript://history.go(-1)");
		
		//Ce lien renvoi vers la page Panier
		//header('Location: http://localhost/ECEbay/Panier.php');
mysqli_close($db_handle);
?>