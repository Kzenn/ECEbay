<?php

session_start();


$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
$i=0;
	
//si le BDD existe, faire le traitement. Trouver les ID des livres
if($db_found)  
{
	$result = mysqli_query($db_handle, "SELECT * FROM Equipement ORDER BY ID_Produit" );
	while($data = mysqli_fetch_assoc($result)) 
	{
		$ID=$data['ID_Produit'];
		
		$resultBIS = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID'");
		while($data2 = mysqli_fetch_assoc($resultBIS)) 
		{
			$i=$i+1;

			//on recupère dans des tableaux
			$ID[$i] = $data2['ID_Produit'];
			$Nom[$i] = $data2['Nom'];
			$Prix[$i] = $data2['Prix'].'</br>';
			$Description[$i] = $data2['Description'];
			$Stock[$i] = $data2['Stock'];
			
			$Sport[$i] = $data['Sport'];

			//informations provenant de la table equipement
			echo "Sport: " .$data['Sport'].'</br>';			//informations provenant de la table produit
			echo "ID produit:" .$data2['ID_Produit'].'</br>';
			echo "Nom:" .$data2['Nom'].'</br>';
			echo "Prix:" .$data2['Prix'].'</br>';
			echo "Description:" .$data2['Description'].'</br>';
			echo "Stock:" .$data2['Stock'].'</br>';

			//informations provenant de la table equipement
			echo "Sport: " .$data['Sport'].'</br>';

		}//end while 
		echo '</br>';
	}//end while 
}//endif
else{echo "ma base n'existe pas";}

		echo $ID['1'].'</br>';
		echo $Nom['1'].'</br>';
		echo $Prix['1'].'</br>';
		echo $Description['1'].'</br>';
		echo $Stock['1'].'</br>';
		echo $Sport['1'].'</br>';
?>