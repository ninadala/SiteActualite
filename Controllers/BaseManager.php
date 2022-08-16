<?php

class BaseManager {

     //Attributs
     protected $pdo;

     //Méthodes  
     
     public function __construct() {
         // $host = "localhost";
         // $dbName = "actus";
         // $dbUsername = "root";
         // $dbPassword = "";
         // $this->setPdo(new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword));
         $host = "localhost";
         $dbName = "actus";
         $dbUsername = "root";
         $dbPassword = "";
         try {
             $this->setPdo(new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword));
         }
         catch(\Exception $e) {
             echo $e->getMessage();
         }
     }
 
     /**
      * Get the value of pdo
      */ 
     public function getPdo()
     {
         return $this->pdo;
     }
 
     /**
      * Set the value of pdo
      *
      * @return  self
      */ 
     public function setPdo($pdo)
     {
         $this->pdo = $pdo;
 
         return $this;
     }
 
}