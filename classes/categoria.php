<?php
    class Categoria {
        public string $titolo;
        public string $iconaUrl;

        public function __construct(string $titolo,string $iconaUrl)
        {
            $this->titolo = $titolo;
            $this->iconaUrl = $iconaUrl;
        }


    }
?>