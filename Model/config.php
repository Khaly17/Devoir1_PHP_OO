<?php

    class config {
        public $sqlall = "SELECT * FROM users";
        public $sqlsearch = "SELECT * FROM users WHERE email = ?";
        public $sqlInsertUser = "INSERT INTO users (firstname,lastname,dateNaissance,email,address,sexe, password) VALUES (?,?,?,?,?,?,?)";
        public $sqlDeleteUser = "DELETE FROM users WHERE id = ? ";
        public $sqlUpdateUsers = "UPDATE users SET firstname=?, lastname=?, dateNaiss=?, email=?,address=?, sexe=? WHERE id=?";
        public $listeColumn = ["firstname","lastname","dateNaissance","email","address","sexe","password"];

        public function connect(){
            $serverName = 'localhost';
            $userName = 'root';
            $password = '';
            $dbName = 'devoir1';
            $charset = 'utf8mb4';
            try{
                $db = "mysql:host=".$serverName.";dbname=".$dbName.";password=".$password.";charset=".$charset;
                $pdo = new PDO($db,$userName,$password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }catch(PDOException $e){
                echo "Connection failed: ".$e->getMessage();
            }
        }  
    }
    