<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vente Musique</title>
	
</head>

	<body>
		<form action="http://localhost/ECEbay/Vendre/VetementAjout.php" method="post">
			<table>

				<tr>
					<td>Nom:</td>
					<td><input type="text" name="nom"></td>
				</tr>
				<tr>
					<td>Prix:</td>
					<td><input type="float" name="prix"></td>
				</tr>	
				<tr>
					<td>Stock:</td>
					<td><input type="int" name="stock"></td>
				</tr>
				<tr>
					<td>Couleur:</td>
					<td><input type="text" name="couleur"></td>
				</tr>
				<tr>
				       <td><label for="taille">Taille ?</label><br/>
       						<select name="taille">
           						<option value="xs">XS</option>
           						<option value="s">S</option>
           						<option value="m">M</option>
           						<option value="l">L</option>
           						<option value="xl">XL</option>
       						</select></td>
       			</tr>
				<tr>
					<td>Model:</td>
					<td><input type="text" name="model"></td>
				</tr>
				<tr>
				       <td><label for="genre">Genre ?</label><br/>
       						<select name="genre">
           						<option value="m">M</option>
           						<option value="f">F</option>
       						</select></td>
       			</tr>
				<tr>
					<td>Description:</td>
					<td><textarea name="description"></textarea> </td>
				</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" n="Valider"></td>
				</tr>
			</table>
		</form>
		</p>

	</body>
</html>

