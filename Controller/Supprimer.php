<?php 
$conf = new config;
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $suppr_id = htmlspecialchars($_GET['id']);
    $suppr = $conf->connect()->prepare($conf->sqlDeleteUser);
    $suppr->execute(array($suppr_id));
    header('Location: ../Views/issets/AfficherToutesMembres.php');

}