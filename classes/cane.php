<?php
    require_once __DIR__ . "/categoria.php";

    class Cane extends Categoria{

        public string $titolo = "Cane";
        private $img_cane = "https://cdn-icons-png.flaticon.com/512/3093/3093496.png";
        // construttore
        public function __construct()
        {
            parent:: __construct($this->titolo,$this->img_cane);
        }

    }
?>
