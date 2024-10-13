<?php 
    // vado a prendere quello che chiamo nel codice
    require_once __DIR__ . "/prodotto.php";
    class Cuccia extends Prodotto{

        //! ho ereditato tutte le proprietà e le capacità della classe Prodotto

        private $materiale;
        private $dimensione;

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
            $this->setMateriale($materiale);
            $this->setDimensione($dimensione);
        }

        // vado a fare i getter e i setter
        public function getMateriale()
        { 
            return $this->materiale;
        }
        public function setMateriale( $materiale): void 
        {
            $this->materiale = $materiale;
        }

	    public function getDimensione()
        {
            return $this->dimensione;
        }

	    public function setDimensione( $dimensione): void 
        {
            $this->dimensione = $dimensione;
        }
    
        public function getAdditionalInfo() : string {
            return "<ul class =\"list-unstyled\"><li> Materiale : {$this->getMateriale()}</li>
                        <li> Dimensione : {$this->getDimensione()}</li>
                    </ul>";
        }
    }
?>