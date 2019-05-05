<?php
session_start();
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
							<li><a href="#" id="currentpage" title="Page actuelle">Catégories</a></li>
							<li><a href="http://localhost/ECEbay/VentesFlash.php" title="Accéder aux ventes flash">Ventes flash</a></li>
							<li><a href="http://localhost/ECEbay/Vendre.php" title="Accéder à la vente">Vendre</a></li>
							<li><a href="http://localhost/ECEbay/Compte.php" title="Accéder à votre compte">Votre compte</a></li>
							<li><a href="http://localhost/ECEbay/Panier.php" title="Accéder au panier">Panier</a></li>
							<li><a href="http://localhost/ECEbay/Admin.php" title="Espace réservé aux admins">Admin</a></li>
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

			$result = mysqli_query($db_handle,"SELECT * FROM acheteur WHERE ID_User LIKE '$ID'");
			$row = mysqli_fetch_array($result);

			Echo "ID user: " .$row['ID_User'].'</br>';
			Echo "Nom: " .$row['Nom'].'</br>';
			Echo "Prenom: " .$row['Prenom'].'</br>';
			Echo "Adresse: " .$row['Adresse'].'</br>';
			Echo "Mail: " .$row['Mail'].'</br>';
			Echo "Solde: " .$row['Solde'].'</br>';
			Echo "Numero de carte: " .$row['NCarte'].'</br>';
			Echo "Date d'expiration de la carte: " .$row['Expiration'].'</br>';
			}
			mysqli_close($db_handle);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Compte</title>
    </head>
    <body>
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

