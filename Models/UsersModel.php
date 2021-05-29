<?php
namespace App\Models;

/**
 * Model pour ta table "users"
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class UsersModel extends Model {
    
    public function __construct() {
        $this->table = "users";
    }
}
