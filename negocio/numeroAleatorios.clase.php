<?php

class numeroAleatorios {

    private $numero;

    public function numeroAleatorio() {
        $array[0] = 11;
        do {
            $numero = rand(0, 9);
            if (in_array($numero, $array)) {
//                echo 'Numero repetido<br>';
            } else {
                $array[] = $numero;
            }
        } while (count($array) <= 10);
        return $array;
    }

}
