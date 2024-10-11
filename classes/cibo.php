<?php 
    require_once __DIR__ . "/prodotto.php";

    class Cibo extends Prodotto{
        public $monoprotein;
        public $tipo_imballaggio;
        public $lowincalories;
        
        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 
            bool $monoprotein,
            string $tipo_imballaggio,
            bool $lowincalories
            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $categoria, 
            );
            $this->monoprotein = $monoprotein;
            $this->tipo_imballaggio = $tipo_imballaggio;
            $this->lowincalories = $lowincalories;
        }
        public function getMonoProtein(){
            return $this->monoprotein;
        }
        public function getTypeImbInfo(){
            return $this->tipo_imballaggio;
        }
        public function getLowCalInfo(){
            return $this->lowincalories;
        }

    }


?>