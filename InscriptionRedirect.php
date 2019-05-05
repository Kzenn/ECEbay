<?php

session_start(); // On démarre la session AVANT toute chose


$Categorie = isset($_POST["categorie"]) ? $_POST["categorie"]:"";


if($Categorie == 'acheteur')
	{header('Location: http://localhost/ECEbay/Inscription/Acheteur.php');}

else if($Categorie == 'vendeur')
	{header('Location: http://localhost/ECEbay/Inscription/Vendeur.php');}

?>