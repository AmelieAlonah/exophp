<?php

use Symfony\Component\VarDumper\Cloner\Data;

class Brand extends CoreModel
{
    
    private string $name;


    /**
     * @param integer $id
     * @return Brand
     */
    public function find(int $id)
    {
        $sql = "
        SELECT product.*, brand.name AS brand_name
        FROM `product`
        INNER JOIN brand ON product.brand_id = brand.id
        WHERE brand_id = {$id}
        ";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Brand');

        return $result;
    }

    /**
     * @return Array
     */
    public function findAll()
    {
        $sql = "
        SELECT * FROM `brand`
        ";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO:: FETCH_CLASS, 'Brand');

        return $results;
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

    

}