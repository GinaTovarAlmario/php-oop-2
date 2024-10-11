<?php
    require_once __DIR__ . "/prodotto.php";

    class Categoria {

        public $icona;

        public function __construct(string $icona)
        {
            $this->icona = $icona;
        }

        //   //mmmm da rivedere
        //   public function getCategory(){
        //     if($categoria == new Gatto()){
        //         return $icona);

        //     }
        // }


    }
?>