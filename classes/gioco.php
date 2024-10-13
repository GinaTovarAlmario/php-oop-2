<?php 
    require_once __DIR__ . "/prodotto.php";

    class Gioco extends Prodotto{

        private string $materiale;
        private float $peso;
        private string $dimensione;
        private bool $impermeabilità;
        protected static $tipo_di_prodotto_visualizzato = 'Gioco';


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
            $this->setMateriale($materiale);
            $this->setPeso($peso);
            $this->setDimensione($dimensione);
            $this->setImpermeabilità($impermeabilità);
        }

        // setters and getters
        public function getMateriale(): string 
        {
            return $this->materiale;
        }
        public function setMateriale(string $materiale): void 
        {
            $this->materiale = $materiale;
        }

	    public function getPeso(): float 
        {
            return $this->peso;
        }
        public function setPeso(float $peso): void 
        {
            $this->peso = $peso;
        }

	    public function getDimensione(): string 
        {
            return $this->dimensione;
        }
	    public function setDimensione(string $dimensione): void 
        {
            $this->dimensione = $dimensione;
        }

        public function getImpermeabilità(): bool
        {
            return $this->impermeabilità;
        }
	    public function setImpermeabilità(bool $impermeabilità): void 
        {
            $this->impermeabilità = $impermeabilità;
        }

	
        public function getAdditionalInfo() : string {
            return "<ul class =\"list-unstyled\">
                        <li> Tipo di prodotto visualizzato : {$this->getTipoDiProdottoVisualizzato()}</li>
                        <li> Materiale : {$this->getMateriale()}</li>
                        <li> Peso : {$this->getPeso()} kg</li>
                        <li> Dimensione : {$this->getDimensione()}</li>
                        <li> Impermeabilità : {$this->formatBooleanValue($this->getImpermeabilità())}</li>
                    </ul>";
        }
    }
?>