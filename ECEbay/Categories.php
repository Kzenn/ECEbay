<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Style.css" />
		<link rel="stylesheet" type="text/css" href="Cat.css" />
		<title>ECEbay</title>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li>
						<img src="Images/menu.jpg">
						<ul class="l2">
							<li><a href="#" id="currentpage" title="Page actuelle">Catégories</a></li>
							<li><a href="VentesFlash.php" title="Accéder aux ventes flash">Ventes flash</a></li>
							<li><a href="http://localhost/ECEbay/Vente.php" title="Accéder à la vente">Vendre</a></li>
							<li><a href="http://localhost/ECEbay/Vente.php" title="Accéder à votre compte">Votre compte</a></li>
							<li><a href="Panier.php" title="Accéder au panier">Panier</a></li>
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
			<a href="SsCategories/Livres.php" id="livres">
				<section>
					<p class="boutton">Livres</p>
				</section>
			</a>
			<a href="SsCategories/Musique.php" id="musique">
				<section>
					<p class="boutton">Musique</p>
				</section>
			</a>
			<a href="SsCategories/Vetements.php" id="vetements">
				<section>
					<p class="boutton">Vêtements</p>
				</section>
			</a>
			<a href="SsCategories/Loisir.php" id="loisir">
				<section>
					<p class="boutton">Sports et loisir</p>
				</section>
			</a>
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