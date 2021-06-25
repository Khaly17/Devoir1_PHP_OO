<?php
    require "../Model/config.php";
    require "Personne.php";
    require "../Model/db.php";

    $obj = new db;
    $personne = new Personne($_POST['firstname'],$_POST['lastname'],$_POST['dateNaissance'],$_POST['email'],$_POST['address'],$_POST['sexe'],$_POST['password']);
    $obj ->connect();


    //$obj->ajouterPersonne($personne1);
    //$obj->afficherPersonne();
   // $objet->affDetailsPersonne();
   // $obj->modifierPersonne();
    //$obj->supprimerPersonne($email);

