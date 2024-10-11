<?php
    require_once __DIR__ . "/categoria.php";

    class Gatto extends Categoria{
        private $img_gatto = "https://cdn-icons-png.flaticon.com/512/3209/3209928.png";
        // construttore
        public function __construct()
        {
            parent::__construct($this->img_gatto);

        }
        // da rivedere
        public function getGattoCategory() : string {
            return $this->img_gatto;
        }

    }
?>