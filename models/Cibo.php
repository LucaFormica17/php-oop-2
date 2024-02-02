<?php


    class Cibo extends Prodotti {
        public $flavour;
        public $size;

        function __construct($_name, $_img, $_price, $_flavour, $_size){
            parent:: __construct($_name, $_img, $_price);
            $this->flavour = $_flavour;
            $this->size = $_size;
        }
    }

?>