<?php
class db {

	/* Edit by Connor Peters 11/4/2017
	*  Copied this getPDO function and created a new function with the "$db" argument to change the connection to any of the 4 possible databases.
	*  To prevent confusion, I am keeping this on intact until we don't need it anymore.
	*/
    public static function getPDO() {
        $pdo = new PDO("mysql:host=localhost;dbname=customer", 'root', 'Cis442Dynu&thCESQ');
        /* Uses actual mysql prepared statement instead of emulating them. */
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        /* If PDO errors out, throw an exception so we can see it */
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }


  /* New mysqli function to connect to databases
  * written by Connor 11/21/2017
  */
    public static function getMysqli($query, $database){
      $db = mysqli_connect("locahost", "root", "Cis442Dynu&thCESQ", "$database");

      if (!$db) {
        print "Error - Could not connect to MySQL via myqli_connect";
        exit;
     }

       trim($query);
       $query = stripslashes($query);
       $result = mysqli_query($db, $query);

       if (!$result) {
        print "Error - the query could not be executed";
        $error = mysqli_error();
        print "<p>" . $error . "</p>";
        exit;
      }

      return $result;
        /*
        *   To use:
        *   $row = mysqli_fetch_assoc($result);
        */
    } //  end of resultMysqli

	/* Edit by Connor Peters 11/4/2017
	*  getCustomerDB to connect to the customer database that contains basic customer information
	*/
	public static function getDB($db) {
        $pdo = new PDO("mysql:host=localhost;dbname=mainsai6_cis442-dynauth-$db", 'mainsai6_cis442', 'Cis442Dynu&thCESQ');
        /* Uses actual mysql prepared statement instead of emulating them. */
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        /* If PDO errors out, throw an exception so we can see it */
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    /**
     * Makes string html safe
     * @param type $var
     * @return string
     */
    public static function sanatize($var, $length = 0) {
        if (is_string($var) && !empty($var)) {
            $l1 = 0;
            $l2 = 1;
            while ($l1 != $l2) {
                $l1 = strlen($var);
                $var = trim(htmlspecialchars_decode($var, ENT_QUOTES));
                $l2 = strlen($var);
            }
            $var = str_replace('&nbsp;', ' ', $var);
            $var = strip_tags($var);
            $var = htmlspecialchars($var, ENT_COMPAT, 'utf-8');
        } else {
            $var = '';
        }
        if ($length > 0 && strlen($var) > $length) {
            $var = substr($var, 0, $length) . '...';
        }
        return $var;
    }

    public static function nl2p($string) {
        $paragraphs = '';

        foreach (explode("\n", $string) as $line) {
            if (trim($line)) {
                $paragraphs .= '<p>' . $line . '</p>';
            }
        }

        return $paragraphs;
    }

    public static function commaInt($string) {
        $numComOnly = preg_replace('/[^0-9,]/', '', $string);
        $noStartEndCom =  preg_replace('/^,+|,+$/', '', $numComOnly);
        $noRepeatCom = preg_replace('/,+/', ',',$noStartEndCom);
        return $noRepeatCom;
    }

}
