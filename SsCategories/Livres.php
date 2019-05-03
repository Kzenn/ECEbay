<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Style.css" />
		<link rel="stylesheet" type="text/css" href="SsCat.css" />
		<title>ECEbay</title>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li>
						<img src="../Images/menu.jpg">
						<ul class="l2">
							<li><a href="../Categories.php" title="Page principale">Catégories</a></li>
							<li><a href="../VentesFlash.php" title="Accéder aux ventes flash">Ventes flash</a></li>
							<li><a href="../Vendre.php" title="Accéder à la vente">Vendre</a></li>
							<li><a href="../Compte.php" title="Accéder à votre compte">Votre compte</a></li>
							<li><a href="../Panier.php" title="Accéder au panier">Panier</a></li>
							<li><a href="../Admin.php" title="Espace réservé aux admins">Admin</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div id="nom">
				<h1>ECEbay</h1>
			</div>
			<div id="connexion">
				<a href="#" title="Compte" id="connex"><img src="../Images/login.jpg"></a>
			</div>
		</header>
		<?php
			$NbArticles = 15;
		?>
        <h2>Liste des livres :</h2>
		<div id="corps">
			<?php
				for($i = 1; $i <= $NbArticles; $i++)
				{
			?>
			<article><?php echo 'Article '.$i; ?></article>
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
