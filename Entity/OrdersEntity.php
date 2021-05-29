<?php 
namespace App\Entity;
use App\Models\OrdersModel;

/**
 * OrdersEntity.php getter et setter des Commandes
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class OrdersEntity extends OrdersModel {

    protected  int        $idOrder;
    protected  int        $idUser;
    protected  int        $idProduct;
    protected  int        $quantity;
    protected  int|float  $price;
    protected  string     $creatAt;

    /**
     * Get the value of idOrder
     *
     * @return  int
     */
    public function getIdOrder() { return $this->idOrder; }

    /**
     * Set the value of idOrder
     *
     * @param  int  $idOrder
     *
     */
    public function setIdOrder(int $idOrder) { $this->idOrder = $idOrder; }

    /**
     * Get the value of idUser
     *
     * @return  int
     */
    public function getIdUser() { return $this->idUser; }

    /**
     * Set the value of idUser
     *
     * @param  int  $idUser
     *
     */
    public function setIdUser(int $idUser) { $this->idUser = $idUser; }

    /**
     * Get the value of idProduct
     *
     * @return  int
     */
    public function getIdProduct() { return $this->idProduct; }

    /**
     * Set the value of idProduct
     *
     * @param  int  $idProduct
     *
     */
    public function setIdProduct(int $idProduct) { $this->idProduct = $idProduct; }

    /**
     * Get the value of quantity
     *
     * @return  int
     */
    public function getQuantity() { return $this->quantity; }

    /**
     * Set the value of quantity
     *
     * @param  int  $quantity
     * 
     */
    public function setQuantity(int $quantity) { $this->quantity = $quantity; }

    /**
     * Get the value of price
     *
     * @return  int|float
     */
    public function getPrice() { return $this->price; }

    /**
     * Set the value of price
     *
     * @param  int|float  $price
     * 
     */
    public function setPrice(int|float $price) { $this->price = $price; }

    /**
     * Get the value of creatAt
     *
     * @return  string
     */
    public function getCreatAt() { return $this->creatAt; }

    /**
     * Set the value of creatAt
     *
     * @param  string  $creatAt
     * 
     */
    public function setCreatAt(string $creatAt) { $this->creatAt = $creatAt; }
}