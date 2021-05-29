<?php 
namespace App\Entity;
use App\Models\OrdersModel;

/**
 * CategoriesEntity.php getter et setter des Categories
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class CategoriesEntity extends OrdersModel {

    protected  int     $id;
    protected  string  $name;
    
    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId() { return $this->id; }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     */
    public function setId(int $id) { $this->id = $id; }

    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName() { return $this->name; }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     */
    public function setName(string $name) { $this->name = $name; }
}