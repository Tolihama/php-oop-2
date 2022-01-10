<?php
class Product {
    protected $item_name;
    protected $price;

    public function __construct($item_name, $price) {
        $this->item_name = $item_name;
        $this->price = $price;
    }

    public function getDiscount($age) {
        return $age < 30 ? $this->price - ($this->price * 10 / 100) : $this->price;
    }

    // Getters
    public function getItemName() {
        return $this->item_name;
    }

    public function getPrice() {
        return $this->price;
    }
}