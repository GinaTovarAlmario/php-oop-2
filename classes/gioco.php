<?php 
    require_once __DIR__ . "/prodotto.php";

    class Gioco extends Prodotto{

        public string $materiale;
        public float $peso;
        public string $dimensione;
        public bool $impermeabilità;

        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 
            string $materiale,
            float $peso,
            string $dimensione,
            bool $impermeabilità,

            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $categoria, 
            );
            $this->materiale = $materiale;
            $this->peso = $peso;
            $this->dimensione = $dimensione;
            $this->impermeabilità =$impermeabilità;
        }

    }
?>