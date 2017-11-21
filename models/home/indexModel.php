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
    /* This function recieves the ajax call for the demo */
    public function dynauthDemo(){
      

      /* $query = "select * from demo";
      $database = "website";
      $result = db::getMysqli($query, $database);
      return $result; */
    } // end of dynauth demo

}
