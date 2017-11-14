<?php

namespace home;

use PDO;
use db;

class contact {
	
	public function getDbTest() {
        $sql = "select fname from customer";
        $pdo = db::getDB("customer");
        $r = false;
        if ($con = $pdo->prepare($sql)) {
            $con->execute();
            $r = $con->fetchAll(PDO::FETCH_ASSOC);
        }
        return $r;
    }
	
}

?>