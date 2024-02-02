<?php
   

    class Accessori extends Prodotti {
        public $material;
        public $function;
        public $size;
        
        function __construct($_name, $_img, $_price, $_material, $_function, $_size){
            parent:: __construct($_name, $_img, $_price,);
            $this->material = $_material;
            $this->function = $_function;
            $this->size = $_size;
        }
    }

?>