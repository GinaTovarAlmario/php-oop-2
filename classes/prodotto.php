<?php
    require_once __DIR__ . "/categoria.php";
    class Prodotto {

        //! Queste sono le variabili di istanza 
        // aggiungiamo incapsulamento

        private string $immagine;
        private string $titolo;
        private float $prezzo;
        private Categoria $categoria;

        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 
            )
        {
            $this->immagine = $immagine;
            $this->titolo = $titolo;
            $this->prezzo = $prezzo;
            $this->categoria = $categoria;
        }

        // devo creare dei metodi getter and setter per ogni variabile

        public function getImmagine(): string {
            return $this->immagine;
        }
    
        public function setImmagine(string $immagine): void {
            $this->immagine = $immagine;
        }
    
        // Getter e Setter per titolo
        public function getTitolo(): string {
            return $this->titolo;
        }
    
        private function setTitolo(string $titolo): void {
            $this->titolo = $titolo;
        }
    
        // Getter e Setter per prezzo
        public function getPrezzo(): string {
            return $this->prezzo ."€";
        }
    
        public function setPrezzo(float $prezzo): void {
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
       
    }

?>