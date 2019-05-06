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
			<nav>
				<ul>
					<li >
						<img src="Images/menu.jpg">
						<ul class="l2">
							<li><a href="Categories.php" title="Page principale">Catégories</a></li>
							<li><a href="VentesFlash.php" title="Accéder aux ventes flash">Ventes flash</a></li>
							<li><a href="#" id="currentpage" title="Page actuelle">Vendre</a></li>
							<li><a href="Compte.php" title="Accéder à votre compte">Votre compte</a></li>
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
			
		<form action="http://localhost/ECEbay/VendreRedirect.php" method="post">
			<table>
				       <td><label for="categorie">Quelle categorie de produits vendez vous ?</label><br/>
       						<select name="categorie">
          						<option value="livre">Livres</option>
           						<option value="musique">Musique</option>
           						<option value="vetement">Vetement</option>
           						<option value="equipement">Equipement</option>
       						</select></td>
       			</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" n="Valider"></td>
				</tr>
			</table>
		</form>
		</p>

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
