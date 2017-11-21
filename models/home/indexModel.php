<?php

namespace home;

use PDO;
use db;

class index {

    public function getDBstuff() {
        $sql = "select fname from customer";
        $pdo = db::getPDO();
        $r = false;
        if ($con = $pdo->prepare($sql)) {
            $con->execute();
            $r = $con->fetchAll(PDO::FETCH_ASSOC);
        }
        return $r;
    }

    public function getMysqliStuff(){
      $query = "select fname from customer";
      $database = "customer"; //not used currently but asssumed in db.php
      $result = db::getMysqli($query);
      return $result;
    }

    public function dynauthDemo(){


    } // end of dynauth demo

}
