<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vente Musique</title>
	
</head>

	<body>
		<form action="http://localhost/ECEbay/Vendre/LivreAjout.php" method="post">
			<table>
			<tr>
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
					<td>Auteur:</td>
					<td><input type="text" name="auteur"></td>
				</tr>
				<tr>
					<td>Editeur:</td>
					<td><input type="text" name="editeur"></td>
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
				       <td><label for="genre">Quelle est le genre de votre livre ?</label><br/>
       						<select name="genre">
           						<option value="poesie">Poesie</option>
           						<option value="roman">Roman</option>
           						<option value="theatre">Theatre</option>
 
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

