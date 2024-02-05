<?php


    class Prodotti {
        public $price;
        public $img;
        public $name;
        public $category;

        function __construct($_name, $_img, $_price, $_category){
            $this->name = $_name;
            $this->img = $_img;
            $this->price = $_price;
            $this->category = $_category;
        }
    }

    
?>