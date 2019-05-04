<?php
session_start();
					
$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$j=0;
$PrixTotal=0;
$NbArticles=0;




//si le BDD existe, faire le traitement. Trouver les ID des livres
if($db_found) 
{

	
		$ID=$_SESSION['ID'];
		echo "Session: ".$ID;

		$result = mysqli_query($db_handle, "SELECT * FROM panier Where ID_User like '$ID'");
		while($data = mysqli_fetch_assoc($result)) 
		{

			$ID_Produit1= $data['ID_Produit1'];
			$ID_Produit2= $data['ID_Produit2'];
			$ID_Produit3= $data['ID_Produit3'];
			$ID_Produit4= $data['ID_Produit4'];
			$ID_Produit5= $data['ID_Produit5'];
			//$ID=$data['ID_Produit'];
		
			$resultProduit1 = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID_Produit1'");
			while($dataProduit1 = mysqli_fetch_assoc($resultProduit1)) 
			{

				$j=$j+1;
				$Produit[$j]['ID']=$ID_Produit1;
				$Produit[$j]['Nom']= $dataProduit1['Nom'];
				$Produit[$j]['Prix']= $dataProduit1['Prix'];
				$PrixTotal = $PrixTotal + $Produit[$j]['Prix'];
				
			}//end while Produit 1

			$resultProduit2 = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID_Produit2'");
			while($dataProduit2 = mysqli_fetch_assoc($resultProduit2)) 
			{

				$j=$j+1;
				$Produit[$j]['ID']=$ID_Produit2;
				$Produit[$j]['Nom']= $dataProduit2['Nom'];
				$Produit[$j]['Prix']= $dataProduit2['Prix'];
				$PrixTotal = $PrixTotal + $Produit[$j]['Prix'];
				
			}//end while Produit 2

			$resultProduit3 = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID_Produit3'");
			while($dataProduit3 = mysqli_fetch_assoc($resultProduit3)) 
			{

				$j=$j+1;
				$Produit[$j]['ID']=$ID_Produit3;
				$Produit[$j]['Nom']= $dataProduit3['Nom'];
				$Produit[$j]['Prix']= $dataProduit3['Prix'];
				$PrixTotal = $PrixTotal + $Produit[$j]['Prix'];
				
			}//end while Produit 1

			$resultProduit4 = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID_Produit4'");
			while($dataProduit4 = mysqli_fetch_assoc($resultProduit4)) 
			{

				$j=$j+1;
				$Produit[$j]['ID']=$ID_Produit4;
				$Produit[$j]['Nom']= $dataProduit4['Nom'];
				$Produit[$j]['Prix']= $dataProduit4['Prix'];
				$PrixTotal = $PrixTotal + $Produit[$j]['Prix'];
				
			}//end while Produit 1

			$resultProduit5 = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Produit like '$ID_Produit5'");
			while($dataProduit5 = mysqli_fetch_assoc($resultProduit5)) 
			{

				$j=$j+1;
				$Produit[$j]['ID']=$ID_Produit5;
				$Produit[$j]['Nom']= $dataProduit5['Nom'];
				$Produit[$j]['Prix']= $dataProduit5['Prix'];
				$PrixTotal = $PrixTotal + $Produit[$j]['Prix'];
				
			}//end while Produit 1





		}//end while 
		echo '</br>';
		$NbArticles=$j;
}//endif
else{echo "ma base n'existe pas";}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Style.css" />
		<title>ECEbay</title>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li >
						<img src="Images/menu.jpg">
						<ul class="l2">
							<li><a href="Categories.php" title="Page principale">Catégories</a></li>
							<li><a href="VentesFlash.php" title="Accéder aux ventes flash">Ventes flash</a></li>
							<li><a href="Vendre.php" title="Accéder à la vente">Vendre</a></li>
							<li><a href="Compte.php" title="Accéder à votre compte">Votre compte</a></li>
							<li><a href="#" id="currentpage" title="Page actuelle">Panier</a></li>
							<li><a href="Admin.php" title="Espace réservé aux admins">Admin</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div id="nom">
				<h1>ECEbay</h1>
			</div>
			<div id="connexion">
				<a href="#" title="Compte" id="connex"><img src="Images/login.jpg"></a>
			</div>
		</header>

		<div id="corps">
			
			<?php
				for($i = 1; $i <= $NbArticles; $i++)
					{
						?>
						<article><?php echo 'Article '.$i;
								//echo $ID['1'].'</br>';
								echo "</br> ID: ".$Produit[$i]['ID'].'</br>';
								echo "Nom: ".$Produit[$i]['Nom'].'</br>';
								echo "Prix: ".$Produit[$i]['Prix'].'</br>';

								?>
						</article>
							<?php
							}
						?>

		</div>
		
		<footer>
			<small>
				<p>
					<a href="#"> Terms </a>  | <a href="#"> Privacy </a>  | 
					<a href="#"> Security </a>  | <a href="#"> Help </a>  | 
					<a href="#"> Blog </a>  | <a href="#"> About </a>  | 
					<a href="mailto:ECEbay@gmail.com">Contact us</a><br>
					Droits d'auteur : Copyright &copy; 2019, ECEbay, Inc. | Paris, FRANCE
				</p>
			</small>
		</footer>
	</body>
</html>
