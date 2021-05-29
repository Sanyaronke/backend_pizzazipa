<?php 
namespace App\Models;

use PDO;

/**
 * DataLayer.php class class lier a la base de donnée
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 */
class DataLayer extends PDO {

    private static $connexion;
    private const DBHOST ="localhost",
                  DBNAME = "pizzazipa",
                  DBUSER = "root",
                  DBPASS = "anyaronkE-123";

    private function __construct() {
        
        $dsn = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;


        try {
            parent:: __construct($dsn, self::DBUSER, self::DBPASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // tableau associative
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     *  retrieve the connexion of database
     *
     * @return self
     */
    public static function getIsntance(): self
    {
        if (self::$connexion === null) {
            self::$connexion = new self();
        }
        return self::$connexion;
    }

}