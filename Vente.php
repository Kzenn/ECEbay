<?php
session_start(); // On démarre la session AVANT toute chose
?>


<!DOCTYPE html>
<html>
<head>
	<title>Vente produit</title>
	
</head>

	<body>
		 <p>Ton ID session: <?php echo $_SESSION['ID']; ?> </p>
		<form action="http://localhost/ECEbay/VenteRedirect.php" method="post">
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

	</body>
</html>

