<?php

/**
 * la classe  db etend la classe config
 */
class db extends config{ 
   
    public function afficher($sql){
        $res = $this->connect()->query($sql);
        $i = 0;
        while($row = $res->fetch()){
            $i++;
           echo'<tbody> <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox'.$i.'" name="options[]" value="'.$i.'">
                        <label for="checkbox'.$i.'"></label>
                    </span>
                </td>
                <td>'.$row['firstname'].'</td>
                <td>'.$row['lastname'].'</td>
                <td>'.$row['dateNaissance'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['sexe'].'</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr></tbody>'; 
        }
    }
    public function afficherPersonne(){     
        $this->afficher($this->sqlall);     
    }
    
    /**
     *  Afficher la ou les  personne(s) dont l
     *  matricule est passe en parametre $sqlsearch
     */
    public function affDetailsPersonne($recherche){
        $stmt = $this->connect()->prepare($this->sqlsearch);
        $stmt->execute([$recherche]);
        $personnes = $stmt->fetchAll();
        $i = 0;
        foreach($personnes as $personne){
            $i++;
            echo '<tbody>
            <tr>
            <td>
                    <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox'.$i.'" name="options[]" value="'.$i.'">
                        <label for="checkbox'.$i.'"></label>
                    </span>
                </td>
                <td>'.$personne['firstname'].'</td>
                <td>'.$personne['lastname'].'</td>
                <td>'.$personne['dateNaissance'].'</td>
                <td>'.$personne['email'].'</td>
                <td>'.$personne['address'].'</td>   
                <td>'.$personne['sexe'].'</td>
                <td>
                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
            </tbody>';
        }    
    }
    
    /***
     * Ajouter une nouvelle personne
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

            $res = $this->connect()->prepare($this->sqlInsertUser);
            $res->execute(array($nom,$prenom,$datedeNaiss,$email, $adresse, $sexe, $mdp));
            
            return true;
       } catch(Exception $e){
           echo "Erreur".$e->getMessage();
       }
    }

    public function modifierPersonne(){
        $res= $this->connect()->prepare($this->sqlUpdateUsers);
        $res->execute($this->listeColumn);
    }

    public function supprimerPersonne($email){
        $res = $this->connect()->prepare($this->sqlDeleteUser);
        $res->execute([$email]);
    }

}
