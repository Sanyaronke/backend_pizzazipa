<?php

namespace App\Models;

use PDO;
use PDOException;

/**
 * DataLayer.php class class lier a la base de donnée
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 */
class DataLayer extends PDO{

    // declaration de l'instance de connexion
    private static $connexion;

    /**
     * test de la connexion a la base de donnée 
     */
    private function __construct() {
        
        $dsn = 'mysql:host:' . DB_HOST . ';db_name:' . DB_NAME;

        try {
            parent::__construct($dsn, DB_USER, DB_PASS);
            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    /**
     * initialisation de l'instance de connexion a la base de donnée
     *
     * @return self
     */
    public static function getInstance(): self
    {
        if(self::$connexion === null)
        {
            self::$connexion = new self();
        }
        return self::$connexion;
    }
}