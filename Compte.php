<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

$database = "ecebay";

$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if($_SESSION['ID'] !='')
{$ID=$_SESSION['ID'];

$result = mysqli_query($db_handle,"SELECT * FROM acheteur WHERE ID_User LIKE '$ID'");
$row = mysqli_fetch_array($result);

Echo "ID user: " .$row['ID_User'].'</br>';
Echo "Nom: " .$row['Nom'].'</br>';
Echo "Prenom: " .$row['Prenom'].'</br>';
Echo "Adresse: " .$row['Adresse'].'</br>';
Echo "Mail: " .$row['Mail'].'</br>';
Echo "Solde: " .$row['Solde'].'</br>';
Echo "Numero de carte: " .$row['NCarte'].'</br>';
Echo "Date d'expiration de la carte: " .$row['Expiration'].'</br>';
}
mysqli_close($db_handle);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Compte</title>
    </head>
    <body>
    <p>
        <a href="http://localhost/ECEbay/Deconnexion.php">Deconnexion</a><br />

    </p>
    </body>
</html>

<?php
if($_SESSION['ID'] ==''){echo "Pas de compte connecté";}
?>