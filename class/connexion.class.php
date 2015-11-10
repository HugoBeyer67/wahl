<?php

class connexion{

//variable to hold connection object.
protected static $db;

//private construct - class cannot be instatiated externally.
private function __construct() {

try {
// assign PDO object to db variable
self::$db = new PDO( "mysql:host=localhost;dbname=wahl","root",'', array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));
self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $e) {
//Output error - would normally log this to error file rather than output to user.
echo "Connection Error: " . $e->getMessage();
}

}

// get connection function. Static method - accessible without instantiation
public static function getConnexion() {

//Guarantees single instance, if no connection object exists then create one.
if (!self::$db) {
//new connection object.
new connexion();
}

//return connection.
return self::$db;
}

}//end class

?>
