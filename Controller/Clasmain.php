<?php
    require "../Model/config.php";
    //require "Personne.php";
    require "../Model/db.php";

    $obj = new db;
    $personne = new Personne($_POST['firstname'],$_POST['lastname'],$_POST['dateNaissance'],$_POST['address'],$_POST['email'],$_POST['sexe'],password_hash($_POST['password'], PASSWORD_DEFAULT));
    $obj ->connect();
    
    

    $obj->ajouterPersonne($personne);

    // if($obj->ajouterPersonne($personne)){

   // $obj->afficherPersonne();
    $obj->affDetailsPersonne("dieng17@gmail.com");
   // $obj->modifierPersonne();
    //$obj->supprimerPersonne($email);

