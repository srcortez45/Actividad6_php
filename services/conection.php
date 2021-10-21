<?php

class Conection{


    private $servername;
    private $port;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect(){

        $this->servername = "localhost";
        $this->port = "6000";
        $this->username = "root";
        $this->password = "test";
        $this->dbname = "classicmodels";
        $this->charset = "utf8mb4";

        try 
        {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";port=".$this->port.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch (PDOException $e)
        {
            echo "Connection failed: ".$e->getMessage();
        }

    }

}

?>