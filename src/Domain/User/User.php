<?php
namespace App\Domain\User;

class User 
{
    private string $id;
    private string $name;
    private string $document;

    public function __construct(
        string $id, 
        string $name, 
        string $document
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->document = $document;
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

}