<?php
namespace App\Domain\Items;

class Items 
{
    private string $id;
    private string $name;
    private string $price;

    public function __construct(
        string $id, 
        string $name, 
        string $price
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    
    public function getId() : string
    {
        return $this->id;
    }
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function getPrice() : string
    {
        return $this->price;
    }

}