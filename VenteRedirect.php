<?php

/*
$Nom = isset($_POST["nom"]) ? $_POST["nom"]:"";
$Prix = isset($_POST["prix"]) ? $_POST["prix"]:"";
$Stock = isset($_POST["stock"]) ? $_POST["stock"]:"";
*/

$Categorie = isset($_POST["categorie"]) ? $_POST["categorie"]:"";


if($Categorie == 'livre')
	{header('Location: Vente/Livre.html');}

else if($Categorie == 'musique')
	{header('Location: Vente/musique.html');}
	//{header('Location: Vente/musique.html?nom='.$Nom.'&prix='.$Prix.'&stock='.$Stock.'');}

else if($Categorie == 'vetement')
	{header('Location: Vente/Vetement.html');}

else if($Categorie == 'equipement')
	{header('Location: Vente/Equipement.html');}
?>

