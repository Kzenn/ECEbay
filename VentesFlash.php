<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Style.css" />
		<link rel="stylesheet" type="text/css" href="VenF.css" />
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
							<li><a href="#" id="currentpage" title="Page actuelle">Ventes flash</a></li>
							<li><a href="Vendre.php" title="Accéder à la vente">Vendre</a></li>
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
			<div class="titre">Meilleurs ventes de livres :</div>
			<section class="grparticles">
				<?php
					for($iL = 1; $iL <= $NbArticles; $iL++)
					{
				?>
				<article>
					<?php
						echo 'Article '.$iL;
						//echo $ID['1'].'</br>';
						//echo "</br> Nom: ".$Nom[$i].'</br>';
						//echo "Prix: ".$Prix[$i].'</br>';
						//echo $Description['1'].'</br>';
						//echo "Stock: ".$Stock[$i].'</br>';				
					?>
				</article>
				<?php
					}
				?>
			</section>
			<div class="titre">Meilleurs ventes de musique :</div>
			<section class="grparticles">
			<?php
					for($iM = 1; $iM <= $NbArticles; $iM++)
					{
				?>
				<article>
					<?php
						echo 'Article '.$iM;
						//echo $ID['1'].'</br>';
						//echo "</br> Nom: ".$Nom[$i].'</br>';
						//echo "Prix: ".$Prix[$i].'</br>';
						//echo $Description['1'].'</br>';
						//echo "Stock: ".$Stock[$i].'</br>';				
					?>
				</article>
				<?php
					}
				?>
			</section>
			<div class="titre">Meilleurs ventes de vêtements :</div>
			<section class="grparticles">
			<?php
					for($iV = 1; $iV <= $NbArticles; $iV++)
					{
				?>
				<article>
					<?php
						echo 'Article '.$iV;
						//echo $ID['1'].'</br>';
						//echo "</br> Nom: ".$Nom[$i].'</br>';
						//echo "Prix: ".$Prix[$i].'</br>';
						//echo $Description['1'].'</br>';
						//echo "Stock: ".$Stock[$i].'</br>';				
					?>
				</article>
				<?php
					}
				?>
			</section>
			<div class="titre">Meilleurs ventes de sports et loisir :</div>
			<section class="grparticles">
			<?php
					for($iS = 1; $iS <= $NbArticles; $iS++)
					{
				?>
				<article>
					<?php
						echo 'Article '.$iS;
						//echo $ID['1'].'</br>';
						//echo "</br> Nom: ".$Nom[$i].'</br>';
						//echo "Prix: ".$Prix[$i].'</br>';
						//echo $Description['1'].'</br>';
						//echo "Stock: ".$Stock[$i].'</br>';				
					?>
				</article>
				<?php
					}
				?>
			</section>
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
