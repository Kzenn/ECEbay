<?php

//mettre les données recupérées  dans la base de données
    
   $dbname = "ecebay";
   $db_login = "root";
   $db_pass	= "";

$database= "ecebay";
//Rappel:votre serveur = localhost | votre login = root | votre mot de pass = ''(rien)
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$ID_User = 0;
$Nom = isset($_POST["nom"]) ? $_POST["nom"]:"";
$Prenom = isset($_POST["prenom"]) ? $_POST["prenom"]:"";
$Adresse = isset($_POST["adresse"]) ? $_POST["adresse"]:"";
$Mail = isset($_POST["mail"]) ? $_POST["mail"]:"";
$Solde = 0;
$PIN = isset($_POST["pin"]) ? $_POST["pin"]:"";
$Ncarte = isset($_POST["ncarte"]) ? $_POST["ncarte"]:"";
$Expiration = isset($_POST["expiration"]) ? $_POST["expiration"]:"";
$Admin = 0;
$Mdp = isset($_POST["mdp"]) ? $_POST["mdp"]:"";


$Verif=0;

//Verifier si le mail du nouveau profil existe déjà ou non dans la bdd
if($db_found) {

	$sql = "SELECT * FROM acheteur";
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
		$sql = "INSERT INTO acheteur (ID_User, Nom, Prenom, Adresse, Mail, Solde, PIN, NCarte, Expiration, Admin, MDP ) VALUES(";
		$sql .= "'$ID_User','$Nom','$Prenom','$Adresse','$Mail', '$Solde', '$PIN', '$Ncarte', '$Expiration', '$Admin', '$Mdp' )";
	
		$bdd->query($sql);
}
else if ($Verif==1)
{echo "Mail déjà existant. <br> <br>";}




//Affichage de la base de données
$sql="SELECT * FROM acheteur" ;

if ($db_found) 

{	
$result = mysqli_query($db_handle, $sql);

while ($data = mysqli_fetch_assoc($result)) 
	{
		echo "Nom:" . $data['Nom'] . '<br>';
		echo "Prenom:" . $data['Prenom'] . '<br>';
		echo "Adresse:" . $data['Adresse'] . '<br>';
		echo "Mail:" . $data['Mail'] . '<br>';
		echo "Solde:" . $data['Solde'] . '<br>';
		echo "Numero de carte:" . $data['NCarte'] . '<br>';
		echo "Expiration:" . $data['Expiration'] . '<br>';
		echo "PIN:" . $data['PIN'] . '<br>';
		echo "Admin:" . $data['Admin'] . '<br>';
		echo "Mot de passe:" . $data['MDP'] . '<br>'.'<br>';
	
	}
}

else 
{
	echo "Database not found";
}


mysqli_close($db_handle);
?>