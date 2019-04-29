<?php
//recuperer les données venant de la page HTML partie Etat Civil
$type = isset($_POST["type"])? $_POST["type"] : "";

if($type == "Vendeur")
{
	header('Location: CreationVendeur.html');
}else if($type == "Acheteur")
{
	header('Location: CreationAcheteur.html');
}
?>