<?php


namespace App\Models;

use App\Entity\CategoriesEntity;
use App\Entity\OrdersEntity;
use App\Entity\ProductsEntity;
use App\Entity\UsersEntity;

/**
 * gestion "CRUD" de no table 
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class DataCommuns {

    /* *******************GET METHOD ********************* */
    
    /**
     * getUsers recupere les enregistrement de la talbe users
     *
     * @return array
     */
    public function getUsers() {
        $users = new UsersEntity;
        return $users->findAll("UsersEntity", ['password']);
    }

    /**
     * getUsers recupere les enregistrement de la talbe products
     *
     * @return array
     */
    public function getProducts() {
        $users = new ProductsEntity;
        return $users->findAll("ProductsEntity");
    }

    /**
     * getUsers recupere les enregistrement de la talbe orders
     *
     * @return array
     */
    public function getOrders() {
        $users = new OrdersEntity;
        return $users->findAll("OrdersEntity");
    }

    /**
     * getUsers recupere les enregistrement de la talbe categories
     *
     * @return array
     */
    public function getCategories() {
        $users = new CategoriesEntity;
        return $users->findAll("CategoriesEntity");
    }

    /* ******************* Create METHOD ********************* */
    
    /**
     * createUsers Insertion d'un enregistrement dans la table users
     *
     * @param  UsersEntity $user
     * @return bool
     */
    public function createUsers(UsersEntity $user) { return $user->create(); }

    /**
     * createProducts Insertion d'un enregistrement dans la table products
     *
     * @param  ProductsEntity $product
     * @return bool
     */
    public function createProducts(ProductsEntity $product) { return $product->create(); }

    /**
     * createOrders Insertion d'un enregistrement dans la table orders
     *
     * @param  OrdersEntity $order
     * @return bool
     */
    public function createOrders(OrdersEntity $order) { return $order->create(); }

     /**
     * createCategories Insertion d'un enregistrement dans la table categorys
     *
     * @param  CategoriesEntity $category
     * @return bool
     */
    public function createCategories(CategoriesEntity $category) { return $category->create(); }

    /* ******************* Update METHOD ********************* */

     /**
     * updateUsers Modification d'un enregistrement dans la table users
     *
     * @param  UsersEntity $user
     * @return bool
     */
    public function updateUsers(UsersEntity $user) { return $user->update($user->getIdUser(), "idUser"); }

     /**
     * updateProducts Modification d'un enregistrement dans la table products
     *
     * @param  OrdersEntity $product
     * @return bool
     */
    public function updateProducts(ProductsEntity $product) { return $product->update($product->getId(), "idProduct"); }

     /**
     * updateOrders Modification d'un enregistrement dans la table orders
     *
     * @param  OrdersEntity $order
     * @return bool
     */
    public function updateOrders(OrdersEntity $order) { return $order->update($order->getIdOrder(), "idOrder"); }

     /**
     * updateCategories Modification d'un enregistrement dans la table categories
     *
     * @param  CategoriesEntity $category
     * @return bool
     */
    public function updateCategories(CategoriesEntity $category) { return $category->update($category->getId(), "id"); }

    /* ******************* Delete METHOD ********************* */

     /**
     * deleteUsers suppression d'un enregistrement dans la table users
     *
     * @param  UsersEntity $user
     * @return bool
     */
    public function deleteUsers(UsersEntity $user) { return $user->delete($user->getIdUser(), "idUser"); }

     /**
     * deleteProducts suppression d'un enregistrement dans la table products
     *
     * @param  ProductsEntity $product
     * @return bool
     */
    public function deleteProducts(ProductsEntity $product) { return $product->delete($product->getId(), "idProduct"); }

     /**
     * deleteOrders suppression d'un enregistrement dans la table orders
     *
     * @param  OrdersEntity $order
     * @return bool
     */
    public function deleteOrders(OrdersEntity $order) { return $order->delete($order->getIdOrder(), "idOrder"); }

     /**
     * deleteCategories suppression d'un enregistrement dans la table categories
     *
     * @param  CategoriesEntity $category
     * @return bool
     */
    public function deleteCategories(CategoriesEntity $category) { return $category->create($category->getId(), "id"); }
}