<?php
    require_once __DIR__ . "/categoria.php";

    class Gatto extends Categoria{
        private $img_gatto = "https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2022/07/gatto-vita.jpg";
        // construttore
        public function __construct()
        {
            parent::__construct($this->img_gatto);

        }

    }
?>