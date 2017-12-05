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

    public function addSitePassword($url, $name, $username, $password, $cid){
        $pdo = db::getPDO();
        $stmt = $pdo->prepare("INSERT INTO sitePasswordInfo (name, url, username, password, customer_id) VALUES (:name, :url, :username, :password, :cid)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':cid', $cid);

        return $stmt->execute();
    }

     public function updateSitePassword($url, $name, $username, $password, $cid, $sid){
        $pdo = db::getPDO();
        $stmt = $pdo->prepare("UPDATE sitePasswordInfo SET name = :name, url = :url, username = :username, password= :password WHERE site_id = :sid AND customer_id = :cid");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':cid', $cid);
        $stmt->bindParam(':sid', $sid);

        return $stmt->execute();
    }

    public function getSite($id){
        $pdo = db::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM sitePasswordInfo where customer_id = ?");
        if ($stmt->execute(array($id))) {
            $result = array();
          while ($row = $stmt->fetch()) {
            array_push($result, $row);
          }
          return $result;
        }
        return false;
    }

     public function getSiteInfo($sid, $cid){
        $pdo = db::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM sitePasswordInfo where customer_id = ? AND site_id = ?");
        if ($stmt->execute(array($cid, $sid))) {
            $result = $stmt->fetch();
         
          return $result;
        }
        return false;
    }

    public function deleteSite($cid, $sid){
        $pdo = db::getPDO();
        $stmt = $pdo->prepare("DELETE FROM sitePasswordInfo WHERE customer_id = ? AND site_id = ?");
        if ($stmt->execute(array($cid, $sid))) {
          return true;
        }
        return false;
    }
}
