<?php
session_start();


$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

$j=0;


if($db_found) 
{
		$ID=$_SESSION['ID'];

		$result = mysqli_query($db_handle, "SELECT * FROM produit Where ID_Vendeur like '$ID'");
		while($data = mysqli_fetch_assoc($result)) 
		{
		$j=$j+1;
		$Nom[$j]=$data['Nom'];
		$Prix[$j]=$data['Prix'];
		$Stock[$j]=$data['Stock'];
		$NB_Ventes[$j]=$data['NB_Ventes'];
		}
$NbArticles=$j;
}
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
			<div id="connexion">
				<img src="Images/login.jpg">
			</div>
			<div>
				<h1>ECEbay</h1>
			</div>
			<nav>
				<ul>
					<li >
						Menu
						<ul class="l2">
							<li><a href="http://localhost/ECEbay/Categories.php">Catégories</a></li>
							<li><a href="http://localhost/ECEbay/VentesFlash.php" title="Accéder aux ventes flash">Ventes flash</a></li>
							<li><a href="http://localhost/ECEbay/Vendre.php" title="Accéder à la vente">Vendre</a></li>
							<li><a href="http://localhost/ECEbay/Compte.php" title="Accéder à votre compte">Votre compte</a></li>
							<li><a href="http://localhost/ECEbay/Panier.php" title="Accéder au panier">Panier</a></li>
							<li><a href="http://localhost/ECEbay/Admin.php" title="Espace réservé aux admins">Admin</a></li>
							<li><a href="http://localhost/ECEbay/Connexion.php" title="Connexion">Connexion</a></li>
							<li><a href="http://localhost/ECEbay/Deconnexion.php" title="Deconnexion">Deconnexion</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>

			
			 <h2>Liste des equipements sportifs :</h2>
		<div id="corps">
			<?php
				for($i = 1; $i <= $NbArticles; $i++)
				{
			?>
			<article><?php echo 'Article '.$i;
			//echo $ID['1'].'</br>';
			echo "</br> Nom: ".$Nom[$i].'</br>';
			echo "Prix: ".$Prix[$i].'</br>';
			//echo $Description['1'].'</br>';
			echo "Stock: ".$Stock[$i].'</br>';
			echo "Nombre d'unités vendues: " .$NB_Ventes[$i].'</br>'.'</br>';
			
			?></article>
			<?php
				}
			?>
		</div>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Compte</title>
    </head>
    <body>
    </body>
</html>

<?php
if($_SESSION['ID'] ==''){echo "Pas de compte connecté";}
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

