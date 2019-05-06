<?php
session_start(); // On démarre la session AVANT toute chose
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vente Musique</title>
	
</head>

	<body>

		<form action="http://localhost/ECEbay/Vente/MusiqueAjout.php" method="post" enctype="multipart/form-data">
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
				<input type="file"  accept="image/*" name="my_file" id="file"  onchange="loadFile(event)" style="display: none;"><br/> <br/>
				<label for="file" style="cursor: pointer;">Upload Image</label>
				<img id="output" width="350" />
				<tr>
				
				</tr>
				
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Upload"></td>
				</tr>
			</table>
		</form>
		</p>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
	var fileName = input.files[0].name; 
};
</script>
	</body>
</html>

