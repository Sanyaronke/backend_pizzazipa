<?php
namespace App\Models;

/**
 * Model pour ta table "product"
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class ProductsModel extends Model {
    
    public function __construct() {
        $this->table = "products";
    }
}
