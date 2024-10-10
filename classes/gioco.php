<?php 
    require_once __DIR__ . "/prodotto.php";

    class Gioco extends Prodotto{

        public $materiale;
        public $peso;
        public $dimensione;
        public $impermeabilità;
        public  $climatePledgeFriendly;
        public $pfasFree;
        
        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            string $icona_della_categoria, 
            string $tipo_articolo_visualizzato,
            string $materiale,
            float $peso,
            string $dimensione,
            bool $impermeabilità,
            bool  $climatePledgeFriendly,
            bool $pfasFree,

            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $icona_della_categoria, 
                "Gioco",
                $materiale,
                $peso,
                $dimensione,
                $impermeabilità,
                $climatePledgeFriendly,
                $pfasFree,
            );
            $this->materiale = $materiale;
            $this->peso = $peso;
            $this->dimensione = $dimensione;
            $this->impermeabilità =$impermeabilità;
            $this->climatePledgeFriendly = $climatePledgeFriendly;
            $this->pfasFree = $pfasFree;
        }
    }
?>