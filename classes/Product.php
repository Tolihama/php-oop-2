<?php
class Product {
    protected $item_name;
    protected $price;
    protected $discount;

    public function __construct($item_name, $price) {
        $this->item_name = $item_name;
        $this->price = $price;
    }

    public function setDiscount($age) {
        $age > 18 ? $this->discount = 0 : $this->discount = 10;
    }

    // Getters
    public function getItemName() {
        return $this->item_name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDiscount() {
        return $this->discount;
    }
}