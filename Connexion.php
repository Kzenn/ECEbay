<?php
session_start(); // On démarre la session AVANT toute chose
?>


<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	
</head>

	<body>
		<form action="http://localhost/ECEbay/ConnexionRedirect.php" method="post">
			<table>
				       <td><label for="categorie">Quelle type de compte ?</label><br/>
       						<select name="categorie">
          						<option value="acheteur">Acheteur</option>
           						<option value="vendeur">Vendeur</option>
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
