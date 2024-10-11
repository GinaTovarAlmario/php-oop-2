<?php
    require_once __DIR__ . "/categoria.php";

    class Gatto extends Categoria{

        public string $titolo = "Gatto";
        private string $img_gatto = "https://cdn-icons-png.flaticon.com/512/3209/3209928.png";

        // construttore

        public function __construct()
        {
            parent:: __construct($this->titolo,$this->img_gatto);

        }
      
    }
?>