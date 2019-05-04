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


/*$ID=$data['ID_Produit'];


	
$result = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID'");
while($data = mysqli_fetch_assoc($result)) 
	{
	$j=$j+1;

	$ID[$j] = $data2['ID_Produit'];
	$Nom[$j] = $data2['Nom'];
	$Auteur[$j] = $data['Auteur'];
	$Prix[$j] = $data2['Prix'].'</br>';

	//$Description[$j] = $data2['Description'];
	$Stock[$j] = $data2['Stock'];
			
	$Date_Parution[$j] = $data['Date_Parution'];
	$Genre[$j] = $data['Genre'];

			//$Sport[$j] = $data['Sport'];

}//end while 
echo '</br>';
$NbArticles=$j; */


$ID_User = 15;
$ID_Produit1 = 1;
$ID_Produit2 = 2;
$ID_Produit3 = 3;
$ID_Produit4 = 4;
$ID_Produit5 = 5;




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

//inserer dans la table panier
if($Verif==0)
{
		$bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", $db_login, $db_pass);
		$sql = "INSERT INTO panier (ID_User,ID_Produit1, ID_Produit2, ID_Produit3, ID_Produit4, ID_Produit5) VALUES(";
		$sql .= "'$ID_User', '$ID_Produit1', '$ID_Produit2', '$ID_Produit3', $ID_Produit4', '$ID_Produit5' )";
	
		$bdd->query($sql);
}
else if ($Verif==1)
{echo "Mail déjà existant. <br> <br>";}





mysqli_close($db_handle);
?>