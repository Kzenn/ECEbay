<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vente Musique</title>
	
</head>

	<body>
		<form action="http://localhost/ECEbay/Vendre/EquipementAjout.php" method="post">
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
				<tr>
					<td>Description:</td>
					<td><textarea name="description"></textarea> </td>
				</tr>	
				<tr>
				       <td><label for="sport">Quelle sport ?</label><br/>
       						<select name="sport">
           						<option value="ski">Ski</option>
           						<option value="tir">Tir</option>
           						<option value="equitation">Equitation</option>
           						<option value="foot">Football</option>
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

