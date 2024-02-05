<?php
    include __DIR__.'/models/Prodotti.php';
    include __DIR__.'/models/Accessori.php';
    include __DIR__.'/models/Giochi.php';
    include __DIR__.'/models/Cibo.php';
    include __DIR__.'/models/Categoria.php';



    $categories = [
        'cane' => new Categoria ('Cane' , 'fas fa-dog'),
        'gatto' => new Categoria ('Gatto' , 'fas fa-cat'),
        'pesce' => new Categoria ('Pesce' , 'fas fa-fish'),
        'uccello' => new Categoria ('Uccello' , 'fas fa-dove'),
    ];


    $prodotto_1 = new Cibo ('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', '12.99', $categories['cane'], 'Manzo', '540g',);

    $prodotto_2 = new Cibo ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', '8.99', $categories['cane'], 'Chicken', '320g', );

    $prodotto_3 = new Cibo ('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', '3.49', $categories['gatto'], 'Vitello', '90g', );

    $prodotto_4 = new Cibo ('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg','5.99', $categories['pesce'], 'Guppy', '75g', );

    $prodotto_5 = new Accessori ('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', '119.99', $categories['uccello'], 'Legno', 'Voliera', '60x80x140',);

    $prodotto_6 = new Accessori ('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', '39.49', $categories['pesce'], 'Carta filtro', 'Pulizia acqua', '15 - 60l',);

    $prodotto_7 = new Giochi ('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', '2.99', $categories['cane'], 'Plastica', '2 anni +', );

    $prodotto_8 = new Giochi ('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', '7.99', $categories['gatto'], 'Peluche', '2-3 mesi+', );

    $prodotti = [$prodotto_1, $prodotto_2, $prodotto_3, $prodotto_4, $prodotto_5, $prodotto_6, $prodotto_7, $prodotto_8];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>OOP Shop</title>
</head>
<body>
    <div id="app">
        
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <div class="card-container">
                        <?php foreach($prodotti as $prodotto) {?>
                            <div class="card m-3" style="width: 18rem">
                                <img src="<?php echo $prodotto->img ?>" alt="prodotto">
                                <span><i class="<?php echo $prodotto->category->icon ?>"></i> <?php echo $prodotto->category->race ?></span>
                                <div class="card-body">
                                    <h3><?php echo $prodotto->name ?></h3>
                                    <ul class="list-unstyled">
                                        <li><?php echo "$".$prodotto->price ?></li>
                                        <?php 
                                        if(get_class($prodotto) == 'Cibo') {
                                        ?>
                                        <li><?php echo "Gusto: ".$prodotto->flavour ?></li>
                                        <li><?php echo "Peso: " .$prodotto->size ?></li>
                                        <?php } ?>

                                        <?php 
                                        if(get_class($prodotto) == 'Accessori') {
                                        ?>
                                        <li><?php echo "Materiale: ".$prodotto->material ?></li>
                                        <li><?php echo "Utilizzo: " .$prodotto->function ?></li>
                                        <li><?php echo "Dimensioni: " .$prodotto->size ?></li>
                                        <?php } ?>

                                        <?php
                                        if(get_class($prodotto) == 'Giochi') {
                                        ?>
                                        <li><?php echo "Materiale: ".$prodotto->material ?></li>
                                        <li><?php echo "Età consigliata: " .$prodotto->age ?></li>
                                        
                                        <?php } ?>
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