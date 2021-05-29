<?php

namespace App\Models;

/**
 * Model pour ta table "categories"
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class CategoriesModel extends Model {
    
    public function __construct() {
        $this->table = "categories";
    }
}
