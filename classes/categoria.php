<?php
    require_once __DIR__ . "/prodotto.php";

    class Categoria {

        public $icona;

        public function __construct(string $icona)
        {
            $this->icona = $icona;
        }

    }
?>