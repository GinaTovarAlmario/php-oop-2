<?php
    require_once __DIR__ . "/categoria.php";

    class Cane extends Categoria{
        private $img_cane = "https://cdn-icons-png.flaticon.com/512/3093/3093496.png";
        // construttore
        public function __construct()
        {
            parent::__construct($this->img_cane);
        }

        // da rivedere
        public function getCaneCategory() : string {
            return $this-> img_cane;
        }

    }
?>
