<?php
class Database
  {
    static $instance = null;
    static function init()
    {
        if (self::$instance == null) {
        	try {
            	self::$instance = new PDO('mysql:host=127.0.0.1;dbname=Domolink;charset=utf8', 'root', 'alpine');
            } catch (Exception $e) {
            	header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    			echo "<script>alert('Impossible de se connecter à la base de donnée !{$e->getMessage()}');</script>";
    			echo "La base de donnée est inaccessible :(, reconnectez vous dans quelques temps.";
    			self::$instance = null;
    		}
    	}
    }
    static function execute($command, $array = null)
    {
    	if (gettype($command) != "string" || ($array != null && gettype($array) != "array")) {
    		return null;
    	}
    	else {
    		if (self::$instance == null){
    			Database::init();
    			if (self::$instance == null)
    				return null;
    	    } 
    		try {
    			if ($array == null)
    				$req = self::$instance->query($command);
    			else
    				$req = self::$instance->prepare($command);
    			if (!$req)
       				return null;
   				$req->execute($array);
    			return $req;
    		} catch (Exception $e){
    			echo "<script>alert('Impossible de se connecter à la base de donnée !');</script>";
    			return null;
    		}
    	}
    }
  }
  function humanDateFormat($date) {
    if (date('H:i', strtotime($date)) == "00:00")
        return date('d-m-Y', strtotime($date));
    else
        return date('H:i d-m-Y', strtotime($date));
  }
  function SQLDateFormat($date) {
    return date('Y-m-d', strtotime($date));
  }
  