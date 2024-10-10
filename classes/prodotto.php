<?php
    class Prodotto {

        public $immagine;
        public $titolo;
        public $prezzo;
        public Categoria $categoria;
        public $tipo_articolo_visualizzato; 

        public function __construct(
            string $immagine, 
            string $titolo, 
            float $prezzo, 
            Categoria $categoria, 
            string $tipo_articolo_visualizzato,
            )
        {
            $this->immagine = $immagine;
            $this->titolo = $titolo;
            $this->prezzo = $prezzo;
            $this->categoria = $categoria;
            $this->tipo_articolo_visualizzato = $tipo_articolo_visualizzato;
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
        public function getType(){
            return $this->tipo_articolo_visualizzato;
        }
        

    }

?>