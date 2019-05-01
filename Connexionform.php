<?php
$type = isset($_POST["type"])? $_POST["type"] : "";

if($type == "Vendeur")
{
	header('Location: ConnexionVendeur.html');
}else if($type == "Acheteur")
{
	header('Location: ConnexionAcheteur.html');
}
else if($type == "Administrateur")
{
	header('Location: ConnexionAdministrateur.html');
}
?>