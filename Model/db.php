<?php

/**
 * la classe  db etend la classe config
 */
class db extends config{ 

    public function afficherPersonne(){
        $sql = "SELECT * FROM users";
        $res = $this->connect()->query($sql);
        while($row = $res->fetch()){
            echo 'Prenom : '.$row['firstname'].'<br>';
            echo 'Nom    : '.$row['lastname'].'<br>';
            echo 'Date de Naiss :'.$row['dateNaissance'].'<br>';
            echo 'E-mail    : '.$row['email'].'<br>';
            echo 'Adresse    : '.$row['address'].'<br>';
            echo 'Sexe    : '.$row['sexe'].'<br>'; 
        }
    }
    
    /**
     * Afficher etudiant dont le matricule est passe en parametre
     */
    public function affDetailsPersonne($recherche){
        $sql = "SELECT * FROM users WHERE firstname = ? OR lastname = ? OR email = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$recherche]);
        $personnes = $stmt->fetchAll();

        foreach($personnes as $personne){
            echo 'Prenom : '.$personne['firstname'].'<br>';
            echo 'Nom : '.$personne['lastname'].'<br>';
            echo 'Date de Naiss : '.$personne['dateNaissance'].'<br>';
            echo 'E-mail: '.$personne['email'].'<br>';
            echo 'Adresse : '.$personne['address'].'<br>';
            echo 'Sexe : '.$personne['sexe'].'<br>';
       
        } 
        
    }
    
    /***
     * Ajouter un nouveau etudiant
     */
    public function ajouterPersonne(Personne $personne){
       try{
            $nom = $personne->getNom();
            $prenom = $personne->getPrenom();
            $datedeNaiss = $personne->getDateNaissance();
            $email = $personne->getEmail();
            $adresse = $personne->getAdresse();
            $sexe = $personne->getSexe();
            $mdp = $personne->getPassword();
            $sql = "INSERT INTO users (firstname,lastname,dateNaissance,email,address,sexe, password) VALUES (?,?,?,?,?,?,?)";
            $res = $this->connect()->prepare($sql);
            $res->execute(array($nom,$prenom,$datedeNaiss,$email, $adresse, $sexe, $mdp));
            echo 'Bien sa marche';
       } catch(Exception $e){
           echo "Erreur".$e->getMessage();
       }
    }

    public function modifierPersonne(){

    }
    public function supprimerPersonne($email){
        $sql = "DELETE FROM users WHERE email = $email ";
        $res = $this->connect()->prepare($sql);
    }

}
