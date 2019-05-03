<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Creation acheteur </title>
	
</head>

	<body>
		<form action="http://localhost/ECEbay/Inscription/AcheteurB.php" method="post">
			<table>
				<tr>
					<td>Nom:</td>
					<td><input type="text" name="nom"></td>
				</tr>
				<tr>
					<td>Prenom:</td>
					<td><input type="text" name="prenom"></td>
				</tr>	
				<tr>
					<td>Adresse:</td>
					<td><input type="text" name="adresse"></td>
				</tr>
				<tr>
					<td>Mail:</td>
					<td><input type="text" name="mail"></td>
				</tr>
				<tr>
					<td>Mot de passe:</td>
					<td><input type="text" name="mdp"></td>
				</tr>


				<tr>
					<td><br> Informations banquaires:</td>

				</tr>
				<tr>
					<td>NCarte:</td>
					<td><input type="text" name="ncarte"></td>
				</tr>
				<tr>
					<td>Expiration:</td>
					<td><input type="date" name="expiration"></td>
				</tr>	
				<tr>
					<td>PIN:</td>
					<td><input type="text" name="pin"></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" n="Valider"></td>
				</tr>
			</table>
		</form>
		</p>

	</body>
</html>

