<?php

/**
 * classe figlio
 */

require_once 'Prod.php';
require_once 'Posizione.php';

class SpecialProduct extends Product {
    protected $sconto = 20;

    use Position; 

    public function getSconto(){
        return $this->sconto;
    }

    //funzione polimorfa
    public function getPrice(){
        return $this->price - ($this->price * $this->sconto / 100);
    }
}

