<?php
    class Prodotti {
        public $price;
        public $img;
        public $name;

        function __construct($_name, $_img, $_price){
            $this->name = $_name;
            $this->img = $_img;
            $this->price = $_price;
        }
    }

    
?>