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
?>