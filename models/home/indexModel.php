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

    } // end of dynauth demo

    /* pull products from database and return an array */
    public function getProductTable($type){
        $pdo = db::getPDO();
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $stmt = $pdo->prepare("select product, description, price, frequency from website.$type");
        $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
      }

    public function validLogin($username, $password){
        // $pdo = db::getPDO();
        // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // $stmt = $pdo->prepare("select product, description, price, frequency from website.$type");
        return true;
    }
}
