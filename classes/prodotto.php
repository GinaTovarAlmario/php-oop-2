<?php
    class Prodotto {

        public $immagine;
        public $titolo;
        public $prezzo;
        public $icona_della_categoria;
        public $tipo_articolo_visualizzato; 
        // esempio :cuccia cibo o cosa

        public function __construct(string $immagine, string $titolo, float $prezzo, string $icona_della_categoria, string $tipo_articolo_visualizzato)
        {
            $this->immagine = $immagine;
            $this->titolo = $titolo;
            $this->prezzo = $prezzo;
            $this->icona_della_categoria = $icona_della_categoria;
            $this->tipo_articolo_visualizzato = $tipo_articolo_visualizzato;
        }
    }
?>