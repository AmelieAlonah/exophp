<?php 

class Product extends CoreModel
{
    
    private string $name;
    private string $description;
    private int $price;
    private int $brand_id;


    /**
     * @param integer $id
     * @return Product
     */
    public function find(int $id)
    {

    }

    /**
     * @return Array
     */
    public function findAll()
    {
        $sql = "
        SELECT * FROM `product` 
        ";

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Product');

        return $results ;
    }



    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

  
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }


    public function getBrand_id()
    {
        return $this->brand_id;
    }
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;
        return $this;
    }


}