<?php
namespace App\Domain\Order;

use App\Domain\Store\Items\Items;

class Order 
{
    private string $id;
    private string $userId;
    private string $storeId;
    private array $items;

    public function __construct(
        string $id, 
        string $userId,
        string $storeId,
        array $items
    ) {
        $this->id = $id;
        $this->userId = $userId;
        $this->storeId = $storeId;
        $this->items = $items;
    }
    
    public function addItems(Items $items)
    {
        $this->items[] = $items;
    }

    public function getId() : string
    {
        return $this->id;
    }
    
    public function getUserId() : string
    {
        return $this->userId;
    }
    
    public function getStoreId() : string
    {
        return $this->storeId;
    }

    public function getItems() : array
    {
        return $this->items;
    }

}