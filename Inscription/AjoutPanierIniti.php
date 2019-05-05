<?php
session_start();
//mettre les données recupérées  dans la base de données
    
   $dbname = "ecebay";
   $db_login = "root";
   $db_pass	= "";

$database= "ecebay";
//Rappel:votre serveur = localhost | votre login = root | votre mot de pass = ''(rien)
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);




$ID_User = $_SESSION['ID'];
$ID_Produit1 = 11;
$ID_Produit2 = 21;
$ID_Produit3 = 31;
$ID_Produit4 = 41;
$ID_Produit5 = 51;


$Verif=0;



//inserer dans la table panier
if($Verif==0)
{
		$bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", $db_login, $db_pass);
		$sql = "INSERT INTO panier VALUES('$ID_User', '0', '0', '0', '0', '0' )";
		$bdd->query($sql);
}
else if ($Verif==1)
{echo "Mail déjà existant. <br> <br>";}

mysqli_close($db_handle);
?>