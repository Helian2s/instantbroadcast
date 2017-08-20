<?php

class db {

    private $_db;
        
    public static $mysqli = null;

    private function __construct($db_host, $db_user, $db_password, $db_name) {
        $ob = @new mysqli($db_host, $db_user, $db_password, $db_name);
            if (!$ob->connect_error) {
                $this->_db = $ob;
                $this->_db->query("SET NAMES 'utf8'");
                return $this->_db;
            }
            else {
                exit("No connect to server!");
            }
    }
    
    public static function getDBO() {
        if (self::$mysqli == null) {
            $obj = new db(Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD, Config::DB_NAME);
            self::$mysqli = $obj->_db;
        }
        return self::$mysqli;
    }
}

?>