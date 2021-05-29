<?php 
namespace App\Entity;
use App\Models\ProductsModel;

/**
 * ProductsEntity.php getter et setter des produits
 * 
 * @author ANYARONKE DARE <dsanyaronke@gmail.com>
 * site dsanyaronke.herokuApp.com
 * 
 */
class ProductsEntity extends ProductsModel{

    protected  int          $id;
    protected  int          $category;
    protected  string       $name;
    protected  string       $creatAt;
    protected  string       $description;
    protected  int|float    $sizeS;
    protected  int|float    $sizeM;
    protected  int|float    $sizeXL;
    protected  string|null  $image;



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
    public function setId(int $id) { $this->id = $id;  }

    /**
     * Get the value of category
     *
     * @return  int
     */
    public function getCategory() { return $this->category; }

    /**
     * Set the value of category
     *
     * @param  int  $category
     *
     */
    public function setCategory(int $category) { $this->category = $category;  }

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
    public function setName(string $name) { $this->name = $name;  }

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
    public function setCreatAt(string $creatAt) { $this->creatAt = $creatAt;  }

    /**
     * Get the value of description
     *
     * @return  string
     */
    public function getDescription() { return $this->description; }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     */
    public function setDescription(string $description) { $this->description = $description;  }

    /**
     * Get the value of sizeS
     *
     * @return  int|float
     */
    public function getSizeS() { return $this->sizeS; }

    /**
     * Set the value of sizeS
     *
     * @param  int|float  $sizeS
     *
     */
    public function setSizeS(int|float $sizeS) { $this->sizeS = $sizeS;  }

    /**
     * Get the value of sizeM
     *
     * @return  int|float
     */
    public function getSizeM() { return $this->sizeM; }

    /**
     * Set the value of sizeM
     *
     * @param  int|float  $sizeM
     *
     */
    public function setSizeM(int|float $sizeM) { $this->sizeM = $sizeM;  }

    /**
     * Get the value of sizeXL
     *
     * @return  int|float
     */
    public function getSizeXL() { return $this->sizeXL; }

    /**
     * Set the value of sizeXL
     *
     * @param  int|float  $sizeXL
     *
     */
    public function setSizeXL(int|float $sizeXL) { $this->sizeXL = $sizeXL;  }

    /**
     * Get the value of image
     *
     * @return  string|null
     */
    public function getImage() { return $this->image; }

    /**
     * Set the value of image
     *
     * @param  string|null  $image
     *
     */
    public function setImage(string|null $image) { $this->image = $image;  }
}