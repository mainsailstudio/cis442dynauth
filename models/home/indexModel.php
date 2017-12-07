<?php

namespace home;

use PDO;
use db;

class index {

    /* pull products from database and return an array */
    public function getProductTable($type){
        $pdo = db::getPDO();
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $stmt = $pdo->prepare("select product, description, price, frequency from website.$type");
        $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
      }

    public function validLogin($email, $passwords){
        $pdo = db::getPDO();
        $stmt = $pdo->prepare("SELECT * FROM customerInfo where email = ?");
        $user;
        if ($stmt->execute(array($info['email']))) {
            $user = $stmt->fetch();
        }
        if($user && count($user) >= 1){
            foreach ($passwords as $key => $value) {
                $stmt = $pdo->prepare("SELECT customer_id FROM passwordVault WHERE customer_id = ? AND pIndex = ? AND password = ?");
                    if ($stmt->execute(array($user->customer_id, $key, $value))) {
                            $result = $stmt->fetch();
                            if(!$result){
                                return false;
                            }
                    }

            }
        }else {
            return false;
        }
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

    public function register($info){
        $dynauth = array();
         $pdo = db::getPDO();
         $stmt = $pdo->prepare("INSERT INTO customerInfo (email, reminder) VALUES (:email, :reminder)");

        $stmt->bindParam(':email', $info['email']);
        $stmt->bindParam(':reminder', $info['reminder']);

        $stmt->execute();

        $stmt = $pdo->prepare("SELECT * FROM customerInfo where email = ?");
        $user;
        if ($stmt->execute(array($info['email']))) {
            $user = $stmt->fetch();
        }

        $stmt = $pdo->prepare("INSERT INTO passwordVault (customer_id, pIndex, password) VALUES (:customer_id, :index, :password)");
        $counter = 1;
        foreach($info as $key => $value) {
            if (preg_match("/dynauthInput*/",$key)){
                $stmt->bindParam(':customer_id', $user->customer_id);
                $stmt->bindParam(':index', $counter);
                $stmt->bindParam(':password', $value);
                $stmt->execute();
                $counter++;
            }
        }

        return true;
    }
}
