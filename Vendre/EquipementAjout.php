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


//idmax recupère l'ID_Produit max deja existant.
$result = mysqli_query($db_handle, "SELECT * FROM `produit` ORDER BY `ID_Produit` DESC LIMIT 1");
$row = mysqli_fetch_array($result);
$idmax=$row['ID_Produit'];




$ID_Produit=$idmax+1;
$ID_Vendeur=$_SESSION['ID'];
$Nom = isset($_POST['nom']) ? $_POST['nom']:"";
$Prix = isset($_POST["prix"]) ? $_POST["prix"]:"";
$Stock = isset($_POST["stock"]) ? $_POST["stock"]:"";
$Description = isset($_POST["description"]) ? $_POST["description"]:"";

$Sport = isset($_POST["sport"]) ? $_POST["sport"]:"";


//$Nom="test";


$Verif=0;

/*Verifier si le mail du nouveau profil existe déjà ou non dans la bdd
if($db_found) {

	$sql = "SELECT * FROM vendeur";
	$result = mysqli_query($db_handle,$sql);
	while($data = mysqli_fetch_assoc($result)) 
		{
		if($Mail == $data['Mail'])
			{$Verif=1;}
		}
	} */

//inserer dans la table produit
if($Verif==0)
{
		$bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", $db_login, $db_pass);
		$sql = "INSERT INTO produit (ID_Vendeur, ID_Produit, Nom, Prix, Description, Stock) VALUES(";
		$sql .= "'$ID_Vendeur', '$ID_Produit', '$Nom', '$Prix', '$Description', '$Stock' )";
	
		$bdd->query($sql);
}
else if ($Verif==1)
{echo "Mail déjà existant. <br> <br>";}


//Inserer dans la table musique
if($Verif==0)
{
		$bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", $db_login, $db_pass);
		$sql = "INSERT INTO equipement (ID_Produit, Sport) VALUES(";
		$sql .= "'$ID_Produit', '$Sport')";
	
		$bdd->query($sql);
}
else if ($Verif==1)
{echo "Mail déjà existant. <br> <br>";}

header('Location: http://localhost/ECEbay/Categories.php');



mysqli_close($db_handle);
?>