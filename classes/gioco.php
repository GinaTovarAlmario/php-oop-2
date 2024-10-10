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
            Categoria $categoria, 
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
                $categoria, 
                "Gioco",
            );
            $this->materiale = $materiale;
            $this->peso = $peso;
            $this->dimensione = $dimensione;
            $this->impermeabilità =$impermeabilità;
            $this->climatePledgeFriendly = $climatePledgeFriendly;
            $this->pfasFree = $pfasFree;
        }

        public function getImg(){
            return $this->materiale;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getDimensione(){
            return $this->dimensione;
        }
        public function getImpermeabilità(){
            return $this->impermeabilità;
        }
        public function getClimatePledgeFriendly(){
            return $this->climatePledgeFriendly;
        }
        public function getPfasFree(){
            return $this->pfasFree;
        }
       



    }
?>