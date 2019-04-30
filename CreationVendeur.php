<?php

//mettre les données recupérées  dans la base de données
    
   $dbname = "ecebay";
   $db_login = "root";
   $db_pass	= "";

$database= "ecebay";
//Rappel:votre serveur = localhost | votre login = root | votre mot de pass = ''(rien)
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$ID_Vendeur = 0;
$Pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"]:"";
$Mail = isset($_POST["mail"]) ? $_POST["mail"]:"";
$P_Adresse = isset($_POST["padresse"]) ? $_POST["padresse"]:"";
$F_Adresse = isset($_POST["fadresse"]) ? $_POST["fadresse"]:"";
$Solde = 0;



$Verif=0;

//Verifier si le mail du nouveau profil existe déjà ou non dans la bdd
if($db_found) {

	$sql = "SELECT * FROM vendeur";
	$result = mysqli_query($db_handle,$sql);
	while($data = mysqli_fetch_assoc($result)) 
		{
		if($Mail == $data['Mail'])
			{$Verif=1;}
		}
	}


if($Verif==0)
{
		$bdd = new PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8", $db_login, $db_pass);
		$sql = "INSERT INTO vendeur (ID_Vendeur, Pseudo, Mail, Photo_Adresse, Fond_Adresse, Solde) VALUES(";
		$sql .= "'$ID_Vendeur', '$Pseudo', '$Mail', '$P_Adresse', '$F_Adresse', '$Solde' )";
	
		$bdd->query($sql);
}
else if ($Verif==1)
{echo "Mail déjà existant. <br> <br>";}




//Affichage de la base de données
$sql="SELECT * FROM vendeur" ;

if ($db_found) 

{	
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) 
	{
		echo "ID vendeur:" . $data['ID_Vendeur'] . '<br>';
		echo "Pseudo:" . $data['Pseudo'] . '<br>';
		echo "Mail:" . $data['Mail'] . '<br>';
		echo "Photo Adresse:" . $data['Photo_Adresse'] . '<br>';
		echo "Fond Adresse:" . $data['Fond_Adresse'] . '<br>';
		echo "Solde:" . $data['Solde'] . '<br>';
	
	}
}

else 
{
	echo "Database not found";
}


mysqli_close($db_handle);
?>