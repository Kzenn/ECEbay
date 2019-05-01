<?php

$ID = isset($_POST["ID"])? $_POST["ID"] : "";
$password = isset($_POST["password"])? $_POST["password"] : "";

$database = "ecebay";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
if ($_POST["button"]) {
if ($db_found) 
$sql = "Select * from Acheteur";
if($ID != ""){
	$sql .= " Where ID_User like '%$ID%'";
}
$result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) != 0) {
//on a trouve l'ID dans la base de donnee
$sql = "Select * from Acheteur";
if($password != ""){
	$sql .= " Where ID_USer like '%$ID%' and like '%$password%'";
	$result = mysqli_query($db_handle, $sql);
	if (mysqli_num_rows($result) != 0) {
		alert("connexion successful");
		// PENSEZ A REMPLACER LA LIGNE SUIVANTE PAR LA PAGE D ACCUEIL REDIRIGE APRES LA CONNEXION //
		header('Location: Accueil.html');
	}
	else{
		// L un des parametres est inccorect
		echo "Password or ID is incorrect";
	}
}
 } else {
	 // L un des parametres est inccorect
	 echo "Password or ID is incorrect";
}
} else {
echo "Database not found";
}
}
//fermer la connexion
mysqli_close($db_handle);








?>