<?php

namespace home;

use PDO;
use db;

class index {

    public function getDBstuff() {
        $sql = "SELECT * FROM customer.customer;";
        $pdo = db::getPDO();
        $r = false;
        if ($con = $pdo->prepare($sql)) {
            $con->execute();
            $r = $con->fetchAll(PDO::FETCH_ASSOC);
        }
        return $r;
    }

}


