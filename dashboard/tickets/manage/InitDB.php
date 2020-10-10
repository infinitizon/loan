<?php


require __DIR__ . '/../vendor/autoload.php';

class InitDB {

    public $conn;

   public function __construct() {

        global $dbHost; $hLdbHost = $dbHost;
        global $dbUser; $hLdbUser = $dbUser;
        global $dbPass; $hLdbPass = $dbPass;
        global $dbName ;$hLdbName = $dbName;

        $this->conn = new mysqli($hLdbHost, $hLdbUser, $hLdbPass, $hLdbName);
        return $this->conn;
    }

}
