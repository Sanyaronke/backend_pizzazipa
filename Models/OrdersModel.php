<?php

namespace App\Models;

/**
 * Model pour ta table "orders"
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class OrdersModel extends Model {
    
    public function __construct() {
        $this->table = "orders";
    }
}
