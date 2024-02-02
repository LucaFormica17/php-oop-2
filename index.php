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

    class Cibo extends Prodotti {
        public $flavour;
        public $size;

        function __construct($_name, $_img, $_price, $_flavour, $_size){
            parent:: __construct($_name, $_img, $_price);
            $this->flavour = $_flavour;
            $this->size = $_size;
        }
    }

    class Giochi extends Prodotti {
        public $material;
        public $age;

        function __construct($_name, $_img, $_price, $_flavour, $_size, $_material, $_age){
            parent:: __construct($_name, $_img, $_price, $_flavour, $_size);
            $this->material = $_material;
            $this->age = $_age;
        }
    }



    $prodotto_1 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_2 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_3 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_4 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_5 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_6 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_7 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotto_8 = new Prodotti('Royal canin Mini', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', 'Manzo', '540g', 'Plastic', '2-3');

    $prodotti = [$prodotto_1, $prodotto_2, $prodotto_3, $prodotto_4, $prodotto_5, $prodotto_6, $prodotto_7, $prodotto_8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>OOP Shop</title>
</head>
<body>
    <div id="app">
        <?php var_dump($prodotto_1); ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="card-container">
                        <?php foreach($prodotti as $prodotto) {?>
                            <div class="card m-3" style="width: 18rem">
                                <img src="<?php echo $prodotto->img ?>" alt="prodotto">
                                <div class="card-body">
                                    <h3><?php echo $prodotto->name ?></h3>
                                    <ul class="list-unstyled">
                                        <li><?php echo "$".$prodotto->price ?></li>
                                        
                                        <li><?php echo "Gusto: ".$prodotto->flavour ?></li>
                                        <li><?php echo "Peso: " .$prodotto->size ?></li>

                                        <li><?php echo "Materiale: ".$prodotto->material ?></li>
                                        <li><?php echo "Età consigliata: ".$prodotto->age ?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./script/script.js" type="text/javascript"></script>
</body>
</html>