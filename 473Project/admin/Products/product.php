<?php
    // Create Class for Product
    class Product{
        public function __construct($productID, $productName, $sex, $category, $subcategory, $productPrice, $dateAdded, $timeAdded){
            $this->id = $productID;
            $this->name = $productName;
            $this->sex = $sex;
            $this->category = $category;
            $this->subcategory = $subcategory;
            $this->price = $productPrice;
            $this->dateAdded = $dateAdded;
            $this->timeAdded = $timeAdded;
        }

        // Echo out the productID
        public function showProductID(){
            echo($this->id);
        }

        // Echo out the productName
        public function showProductName(){
            echo($this->name);
        }

        public function showProductSex(){
            echo($this->sex);
        }

        public function showProductCategory(){
            echo($this->category);
        }

        public function showProductSubcategory(){
            echo($this->subcategory);
        }

        public function showProductPrice(){
            echo($this->price);
        }

        public function showDateAdded(){
            echo($this->dateAdded);
        }

        public function showTimeAdded(){
            echo($this->timeAdded);
        }
    }
?>