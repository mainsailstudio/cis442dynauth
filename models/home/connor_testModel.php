<?php

namespace home;

use PDO;
use db;

class connor_test {

    public function getDBstuff() {
        $sql = "select c.fname from `mainsai6_cis442-dynauth-customer`.customer c where c.userID=1";
        $pdo = db::getPDO();
        $r = false;
        if ($con = $pdo->prepare($sql)) {
            $con->execute();
            $r = $con->fetchAll(PDO::FETCH_ASSOC);
        }
        return $r;
    }

}


