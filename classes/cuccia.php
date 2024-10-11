<?php 
    // vado a prendere quello che chiamo nel codice
    require_once __DIR__ . "/prodotto.php";
    class Cuccia extends Prodotto{

        //! ho ereditato tutte le proprietà e le capacità della classe Prodotto

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
            );
            $this->materiale = $materiale;
            $this->dimensione = $dimensione;
        }
        
        public function getAdditionalInfo() : string {
            return "<ul class =\"list-unstyled\"><li> Materiale : {$this->materiale}</li>
                        <li> Dimensione : {$this->dimensione}</li>
                    </ul>";
        }
    }
?>