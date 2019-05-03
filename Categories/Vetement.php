<?php

session_start();


$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
	
//si le BDD existe, faire le traitement. Trouver les ID des livres
if($db_found) 
{
	$result = mysqli_query($db_handle, "SELECT * FROM livres ORDER BY ID_Produit" );
	while($data = mysqli_fetch_assoc($result)) 
	{
		$ID=$data['ID_Produit'];
		
		$resultBIS = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID'");
		while($data2 = mysqli_fetch_assoc($resultBIS)) 
		{
			$i=$i+1;
			//informations provenant de la table produit
			echo "ID produit:" .$data2['ID_Produit'].'</br>';
			echo "Nom:" .$data2['Nom'].'</br>';
			echo "Prix:" .$data2['Prix'].'</br>';
			echo "Description:" .$data2['Description'].'</br>';
			echo "Stock:" .$data2['Stock'].'</br>';

			//informations provenant de la table livre
			echo "Auteur: " .$data['Auteur'].'</br>';
			echo "Editeur: " .$data['Editeur'].'</br>';
			echo "Date_Parution: " .$data['Date_Parution'].'</br>';
			echo "Genre: " .$data['Genre'].'</br>';
		}//end while 
		echo '</br>';
	}//end while 
}//endif
else{echo "ma base n'existe pas";}



?>