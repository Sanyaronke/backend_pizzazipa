<?php 
namespace App\Entity;
use App\Models\UsersModel;

/**
 * UsersEntity.php getter et setter des utilisateurs
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class UsersEntity extends UsersModel{

    protected  int|null     $idUser;
    protected  int          $sexe;
    protected  string       $email;
    protected  string       $creatAt;
    protected  string       $lastname;
    protected  string       $firstname;
    protected  string       $dateBirth;
    protected  string|null  $password;
    protected  string|null  $billingAddress;
    protected  string|null  $deliveryAddress;



    

    /**
     * Get the value of sexe
     *
     * @return  int
     */
    public function getSexe() { return $this->sexe; }

    /**
     * Set the value of sexe
     *
     * @param  int  $sexe
     *
     */
    public function setSexe(int $sexe) { $this->sexe = $sexe; }

    /**
     * Get the value of email
     *
     * @return  string
     */
    public function getEmail() { return $this->email; }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     */
    public function setEmail(string $email) { $this->email = $email; }

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

    /**
     * Get the value of lastname
     *
     * @return  string
     */
    public function getLastname() { return $this->lastname; }

    /**
     * Set the value of lastname
     *
     * @param  string  $lastname
     *
     */
    public function setLastname(string $lastname) { $this->lastname = $lastname; }

    /**
     * Get the value of password
     *
     * @return  string|null
     */
    public function getPassword() { return $this->password; }

    /**
     * Set the value of password
     *
     * @param  string|null  $password
     *
     */
    public function setPassword(string|null $password) { $this->password = $password; }

    /**
     * Get the value of firstname
     *
     * @return  string
     */
    public function getFirstname() { return $this->firstname; }

    /**
     * Set the value of firstname
     *
     * @param  string  $firstname
     *
     */
    public function setFirstname(string $firstname) { $this->firstname = $firstname; }

    /**
     * Get the value of dateBirth
     *
     * @return  string
     */
    public function getDateBirth() { return $this->dateBirth; }

    /**
     * Set the value of dateBirth
     *
     * @param  string  $dateBirth
     *
     */
    public function setDateBirth(string $dateBirth) { $this->dateBirth = $dateBirth; }

    /**
     * Get the value of billingAddress
     *
     * @return  string|null
     */
    public function getBillingAddress() { return $this->billingAddress; }

    /**
     * Set the value of billingAddress
     *
     * @param  string|null  $billingAddress
     *
     */
    public function setBillingAddress(string|null $billingAddress) { $this->billingAddress = $billingAddress; }

    /**
     * Get the value of deliveryAddress
     *
     * @return  string|null
     */
    public function getDeliveryAddress() { return $this->deliveryAddress; }

    /**
     * Set the value of deliveryAddress
     *
     * @param  string|null  $deliveryAddress
     *
     */
    public function setDeliveryAddress(string|null $deliveryAddress) { $this->deliveryAddress = $deliveryAddress; }

    /**
     * Get the value of idUser
     *
     * @return  int|null
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @param  int|null  $idUser
     *
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
}