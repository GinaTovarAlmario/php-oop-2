<?php
    class Categoria {
        public string $name;
        public string $iconaUrl;

        public function __construct(string $name,string $iconaUrl)
        {
            $this->name = $name;
            $this->iconaUrl = $iconaUrl;
        }

        // funzione per mandare l'icona
        public function getFavIcon() : string {
            return $this->iconaUrl;
        }
        public function getName() : string {
            return $this->name;
        }

    }
?>