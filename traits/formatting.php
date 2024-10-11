<?php 

    trait formatting {

        // creo un metodo per formattare i valori booleani
        
        public function formatBooleanValue( bool $boolValue) : string {
            return ($boolValue) ? 'Si' : 'No';
        }
    }

?> 