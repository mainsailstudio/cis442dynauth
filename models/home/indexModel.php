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
      $database = "customer";
      $result = db::getMysqli($query, $database);
      return $result;
    }

    public function dynauthDemo(){


    } // end of dynauth demo

}
