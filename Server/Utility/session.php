<?php
 class Connessione
 {
     private $server;
     private $database;
     private $username;
     private $password;

     function __construct()
     {
         $this->server = "localhost";
         $this->database = "bookscorner";
         $this->username = "root";
         $this->password = "";
     }

     function connection()
     {
         mysqli_report(MYSQLI_REPORT_STRICT);
         try {
             $mysqli = new mysqli($this->server, $this->username, $this->password, $this->database);
         } catch (mysqli_sql_exception $exec) {
             echo file_get_contents("/View/subviews/Error.php");
             exit;
         }
        return $mysqli;
     }
 }