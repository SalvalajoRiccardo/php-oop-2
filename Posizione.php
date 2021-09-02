<?php

trait Position{
    private $fisical_position;

    public function setPosition($_fisical_position){
        $this->fisical_position = $_fisical_position;
        
    }

    public function getPosition(){
        return $this->fisical_position;
    }
}