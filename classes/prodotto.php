<?php
    require_once __DIR__ . "/categoria.php";
    class Prodotto {

        public string $immagine;
        public string $titolo;
        public float $prezzo;
        public Categoria $categoria;

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

        public function getImg(){
            return $this->immagine;
        }
        public function getTitle(){
            return $this->titolo;
        }
        public function getPrice(){
            return $this->prezzo . "€";
        }
        public function getCategory(){
            return $this->categoria;
        }
        

    }

?>