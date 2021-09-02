<?php
require_once 'Posizione.php';
/**
 * classe genitore
 */

class Product {
    protected $name;
    protected $price;
    protected $type;
    protected $stock;
    protected $toBuy;
    use Position;

    function __construct($_name, $_type, $_price, $_stock){
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
        $this->stock = $_stock;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getStock(){
        return $this->stock;
    }

    // prendere il numero di prodotti da comprare
    public function setBuy($num){
        $this->toBuy = $num;
    }
    // stampare il numero di prodotti da comprare
    public function getBuy(){
        return $this->toBuy;
    }

}