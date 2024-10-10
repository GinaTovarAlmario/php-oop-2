<?php 
    require_once __DIR__ . "/prodotto.php";

    class Cuccia extends Prodotto{
        public $materiale;
        public $dimensione;

        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            string $icona_della_categoria, 
            string $tipo_articolo_visualizzato,
            string $materiale,
            string $dimensione,
            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $icona_della_categoria, 
                "Cuccia",
            );
            $this->materiale = $materiale;
            $this->dimensione = $dimensione;
        }

    }
?>