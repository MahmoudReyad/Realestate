<?php
class Property extends Database {
    public $id;
    public $address;
    public $description;
    public $sellerId;
    public $avilabilty;
    public $statue;
    public $buyerId;
    public $imagePath;
    public $price;
    public function __construct($address , $description , $sellerId , $avilability , $statue , $imagePath , $price)
    {
        $this->address = $address;
        $this->description = $description;
        $this->sellerId = $sellerId;
        $this->avilabilty = $avilability;
        $this->statue = $statue;
        $this->imagePath = $imagePath;
        $this->price = $price;
    }

}