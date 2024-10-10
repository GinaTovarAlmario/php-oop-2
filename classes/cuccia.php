<?php 
    require_once __DIR__ . "/prodotto.php";

    class Cuccia extends Prodotto{
        public $materiale;
        public $dimensione;

        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 
            string $materiale,
            string $dimensione,
            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $categoria,
                "Cuccia",

            );
            $this->materiale = $materiale;
            $this->dimensione = $dimensione;
        }

        public function getMaterial(){
            return $this->materiale;
        }
        public function getSize(){
            return $this->dimensione;
        }


    }
?>