<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vente Musique</title>
	
</head>

	<body>

		<form action="http://localhost/ECEbay/Vendre/MusiqueAjout.php" method="post">
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
				<tr>
					<td>Auteur:</td>
					<td><input type="text" name="auteur"></td>
				</tr>
				<tr>
					<td>Date de parution:</td>
					<td><input type="date" name="dateparution"></td>
				</tr>	
				<tr>
					<td>Description:</td>
					<td><textarea name="description"></textarea> </td>
				</tr>

				<tr>
				       <td><label for="genre">Quelle genre de musique vendez vous ?</label><br/>
       						<select name="genre">
           						<option value="rap">Rap</option>
           						<option value="edm">EDM</option>
           						<option value="dnb">Drum & Bass</option>
           						<option value="techno">Techno</option>
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

