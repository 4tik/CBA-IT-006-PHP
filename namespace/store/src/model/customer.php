<?php
namespace store\model;

class Customer{
    private $name;
    public function __construct($passing_name){
        $this->name = $passing_name;
    }

    public function displayName(){
        return $this->name;
    }
}


?>