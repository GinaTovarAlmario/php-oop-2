<?php
    require_once __DIR__ . "/categoria.php";

    class Cane extends Categoria{
        private $img_cane = "https://www.farmaciecomunalitorino.it/wp-content/uploads/2023/11/Doodle_2023-11-06T13_20_48Z-850x370.png";
        // construttore
        public function __construct()
        {
            parent::__construct($this->img_cane);
        }
    }
?>
