<?php
    require_once __DIR__ . "/categoria.php";
    require_once __DIR__ . "/../traits/formatting.php";

    // dichiaro la classe per usare exception

    class valoriNonValidi extends Exception {}

    class Prodotto {

        // dichiaro l'uso del trait
        use formatting;

        //! Queste sono le variabili di istanza 

        // aggiungiamo incapsulamento

        private string $immagine;
        private string $titolo;
        private float $prezzo;
        private Categoria $categoria;
        protected static $tipo_di_prodotto_visualizzato = 'Prodotto';


        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 


        )   {
            // Controllo che i parametri non siano vuoti o non validi
            if (empty($immagine) || empty($titolo) || $prezzo <= 0) {
                throw new valoriNonValidi("Valori non validi forniti al costruttore del Prodotto");
            }

            $this->setImmagine($immagine);
            $this->setTitolo($titolo);
            $this->setPrezzo($prezzo);
            $this->setCategoria($categoria);
        }
        // devo creare dei metodi getter and setter per ogni variabile
        public function getImmagine(): string {
            return $this->immagine;
        }
    
        public function setImmagine(string $immagine): void {
            if (empty($immagine)) {
                throw new valoriNonValidi("L'immagine non può essere vuota.");
            }
            $this->immagine = $immagine;
        }
    
        // Getter e Setter per titolo
        public function getTitolo(): string {
            return $this->titolo;
        }
    
        private function setTitolo(string $titolo): void {
            if (empty($titolo)) {
                throw new valoriNonValidi("Il titolo non può essere vuoto.");
            }
            $this->titolo = $titolo;
        }
    
        // Getter e Setter per prezzo
        public function getPrezzo(): string {
            return $this->formatPrice($this->prezzo);
        }
    
        public function setPrezzo(float $prezzo): void {
            if ($prezzo <= 0) {
                throw new valoriNonValidi("Il prezzo deve essere maggiore di zero.");
            }
            $this->prezzo = $prezzo;
        }
    
        // Getter e Setter per categoria
        public function getCategoria(): Categoria {
            return $this->categoria;
        }
    
        public function setCategoria(Categoria $categoria): void {
            $this->categoria = $categoria;
        }
        
        public function getAdditionalInfo() : string {
            return "";
        }
        
        // per poter gestire la proprietà statica nei diversi figli di Prodotto
        
        public function getTipoDiProdottoVisualizzato()
        {
            return static::$tipo_di_prodotto_visualizzato;
        }

    }
     // Esempio di utilizzo con gestione delle eccezioni
     $errori;
     try {
        $categoria = new Categoria("elefante","");
        $prodotto = new Prodotto("", "Smartphone", -20, $categoria);
    } catch ( valoriNonValidi $e) {
        $errori = $e->getMessage();
    }

?>