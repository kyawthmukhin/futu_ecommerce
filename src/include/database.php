<?php
    class Database {
        public static $con;
        public static function connect() {
           return self::$con = new PDO('mysql:host=localhost;dbname=futu;',"root", "");
        }
    }


?>