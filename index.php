<?php 
// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// L'e-commerce vende prodotti per animali.
// I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria
// ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
// BONUS (Opzionale):
// Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi
// e creare un account per ricevere cosi il 20% di sconto.
// Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.

    require_once __DIR__ . "/classes/prodotto.php";
    require_once __DIR__ . "/classes/cuccia.php";
    require_once __DIR__ . "/classes/cibo.php";
    require_once __DIR__ . "/classes/gioco.php";
    require_once __DIR__ . "/classes/categoria.php";
    require_once __DIR__ . "/classes/gatto.php";
    require_once __DIR__ . "/classes/cane.php";


    // creo un array
    $listaProdotti = [
        new Cuccia("https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw049ed900/images_dmail/large/509619l.jpg","Cuccia a pelo lungo",90.00,new Cane(),"poliestere","50x18 cm"),
        new Cibo("https://www.brekz.it/44262/large_default.jpg","Royal canin Instictive",2.50,new Gatto(),true,false,"Confezione bustine",true),
        new Gioco("https://dogecatmegastore.com/upload/immagini_prodotto/285/AD090-B_39_1.jpg","Pallina",10.20,new Cane(),"Gomma",1.2,"72mm",true,true,true),
        new Gioco("https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw719c0a68/images_dmail/large/509459l_1.jpg","Pesca l'esca",29.90,new Gatto(),"pp",0.27,"40cm",false,true,true),
        new Cibo("https://www.hipetcare.it/wp-content/uploads/2022/03/HI-FISH-Adult-12-kg-16095x360-1-800x800.png","Hi Fish low calories",69.90,new Cane(),true,true,"Sacchetto 1.2Kg",true),
        new Cuccia("https://www.ibs.it/images/8052575820844_0_536_0_75.jpg","Navicella",56.50,new Gatto(),"cotone e poliestere","39 x 37 x 30 cm"),
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ginatovaralmario">
    <meta name="project" content="php8-reditarietà">
    <title>ArcaBoolean</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- style -->
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-12 text-center bg-warning">
                <h1>PHP OOP 2 : Ereditarietà</h1>
            </div>
        </div>
    </header>
    <main class="container-fluid bg-dark">
        <section class="container">
            <div class="row">
                <?php foreach( $listaProdotti as $listItem){?>
                    <div class="col-4">
                        <div class="card mt-4 mb-4 box">
                            <img src="<?=$listItem->getImg()?>" class="card-img-top img-card" alt="<?=$listItem->getTitle();?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Titolo: <?= $listItem->getTitle(); ?>
                                </h5>
                                <p class="card-text">
                                    Prezzo: <?= $listItem->getPrice(); ?>
                                </p>
                                <p class="card-text">
                                    Categoria: <?= $listItem->$categoria ?>
                                </p>
                                <p class="card-text">
                                    Tipo: <?=$listItem->getType();?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </section>
    </main>
</body>
</html>