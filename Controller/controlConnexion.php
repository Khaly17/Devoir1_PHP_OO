<?php
try{

include '../Model/pdo.php';

    if(isset($_POST['login'])){
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email ");
        $stmt->execute(
            array(
                'email' => $_POST['email']  
            )
        );

        $count = $stmt->rowCount();
        if($count > 0){
            if(password_hash($_POST['password'], $resultat['password'])){
                session_start();
                $_SESSION['email'] = $_POST['email'];
                header("location: ../Views/issets/AfficherToutesMembres.php");
            }
        }else{
            $message = '<label>Mot de passe ou adresse mail incorrect   </label>';
            header("location: ../Views/issets/connexion.php");
        }
    }

}catch(PDOException $e){
    $message = $e->getMessage();
}

//AND password = :password 'password' => $_POST['password']
