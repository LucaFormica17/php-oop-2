<?php
    


    class Giochi extends Prodotti {
        public $material;
        public $age;

        function __construct($_name, $_img, $_price, $_material, $_age){
            parent:: __construct($_name, $_img, $_price,);
            $this->material = $_material;
            $this->age = $_age;
        }
    }
?>