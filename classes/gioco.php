<?php 
    require_once __DIR__ . "/prodotto.php";

    class Gioco extends Prodotto{

        public $materiale;
        public $peso;
        public $dimensione;
        public $impermeabilità;

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
                "Gioco",
            );
            $this->materiale = $materiale;
            $this->peso = $peso;
            $this->dimensione = $dimensione;
            $this->impermeabilità =$impermeabilità;
        }

        public function getImgGioco(){
            return $this->materiale;
        }
        public function getPesoGioco(){
            return $this->peso;
        }
        public function getDimensioneGioco(){
            return $this->dimensione;
        }
        public function getImpermeabilità(){
            return $this->impermeabilità;
        }

    }
?>