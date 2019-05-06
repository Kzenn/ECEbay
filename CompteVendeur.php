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

		<div id="corps">
			<?php
			$database = "ecebay";

			$db_handle = mysqli_connect('localhost', 'root', '');
			$db_found = mysqli_select_db($db_handle, $database);

			if($_SESSION['ID'] !='')
			{$ID=$_SESSION['ID'];

			$result = mysqli_query($db_handle,"SELECT * FROM vendeur WHERE ID_Vendeur LIKE '$ID'");
			$row = mysqli_fetch_array($result);

			Echo "ID vendeur: " .$row['ID_Vendeur'].'</br>';
			Echo "Pseudo: " .$row['Pseudo'].'</br>';
			Echo "Mail: " .$row['Mail'].'</br>';
			Echo "Solde: " .$row['Solde'].'</br>'.'</br>';
			}
			mysqli_close($db_handle);
			?>
		</div>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Compte</title>
    </head>
    <body>
    <p>
        <a href="http://localhost/ECEbay/ListeVendeur.php">Liste des produits en vente</a><br />

    </p>
    <p>
        <a href="http://localhost/ECEbay/Connexion.php">Connexion</a><br />

    </p>
    <p>
        <a href="http://localhost/ECEbay/Deconnexion.php">Deconnexion</a><br />

    </p>
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

