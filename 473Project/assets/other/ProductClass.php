<?php
    // Create Class for Product
    class Product{
        public function __construct($productID, $productName, $productPrice, $dateAdded){
            $this->id = $productID;
            $this->name = $productName;
            $this->price = $productPrice;
            $this->dateAdded = $dateAdded;
        }

        // Echo out the productID
        public function showProductID(){
            echo($this->id);
        }

        // Echo out the productName
        public function showProductName(){
            echo($this->name);
        }

        // Echo out the productPrice
        public function showProductPrice(){
            echo( number_format($this->price, 2));
        }
    }

    // Create functions for filtering options
    // New Arrivals 
    function sortNewArrivals($object1, $object2){
        return $object1->dateAdded < $object2->dateAdded;
    }

     // A to Z
    function sortATOZ($object1, $object2){
        return $object1->name > $object2->name;
    }

    // Z to A
    function sortZTOA($object1, $object2){
        return $object1->name < $object2->name;
    }

    // Lowest Price
    function sortLowestPrice($object1, $object2){
        return $object1->price > $object2->price;
    }

    // Highest Price
    function sortHighestPrice($object1, $object2){
        return $object1->price < $object2->price;
    }
?>