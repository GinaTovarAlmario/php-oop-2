<?php 
    trait formatting {

        // creo un metodo per formattare i valori booleani

        public function formatBooleanValue( bool $boolValue) : string {
            return ($boolValue) ? 'Si' : 'No';
        }

        // creo un metodo per formattare i prezzi
        public function formatPrice(float $prezzo): string {
            return number_format($prezzo, 2) . "€";
        }

    }

?> 