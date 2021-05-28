<?php
namespace App\Domain\Store;

class Store 
{
    private string $id;
    private string $name;
    private string $document;
    private string $city;

    public function __construct(
        string $id, 
        string $name, 
        string $document,
        string $city
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->document = $document;
        $this->city = $city;
    }
    
    public function getId() : string
    {
        return $this->id;
    }
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function getDocument() : string
    {
        return $this->document;
    }

    public function getCity() : string
    {
        return $this->city;
    }

}