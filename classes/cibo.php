<?php 
    require_once __DIR__ . "/prodotto.php";

    class Cibo extends Prodotto{
        public $glutenfree;
        public $monoprotein;
        public $tipo_imballaggio;
        public $lowincalories;
        
        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            string $icona_della_categoria, 
            string $tipo_articolo_visualizzato,
            bool $glutenfree,
            bool $monoprotein,
            string $tipo_imballaggio,
            bool $lowincalories
            )
        {
            parent::__construct(
                $immagine, 
                $titolo, 
                $prezzo, 
                $icona_della_categoria, 
                "Cibo",
                $glutenfree,
                $monoprotein,
                $tipo_imballaggio,
                $lowincalories,
            );
            $this->glutenfree = $glutenfree;
            $this->monoprotein = $monoprotein;
            $this->tipo_imballaggio = $tipo_imballaggio;
            $this->lowincalories = $lowincalories;
        }
    }


?>