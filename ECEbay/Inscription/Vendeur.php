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
		<form action="http://localhost/ECEbay/Inscription/VendeurB.php" method="post">
			<table>
				<tr>
					<td>Pseudo:</td>
					<td><input type="text" name="pseudo"></td>
				</tr>
				<tr>
					<td>Mail:</td>
					<td><input type="text" name="mail"></td>
				</tr>	
				<tr>
					<td>Photo_Adresse:</td>
					<td><input type="text" name="padresse"></td>
				</tr>
				<tr>
					<td>Fond_Adresse:</td>
					<td><input type="text" name="fadresse"></td>
				</tr>


				<tr>
					<td colspan="2" align="center"><input type="submit" n="Valider"></td>
				</tr>
			</table>
		</form>
		</p>

	</body>
</html>

