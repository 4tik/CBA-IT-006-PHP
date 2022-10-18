<?php
interface Interface01{
    public function first();
}
interface Interface02{
    public function ssecond();
}

class MulInte implements Interface01,Interface02
{
    public function __construct(){
        $this->first();
        $this->ssecond();
    }
    public function first(){
        echo "Interface 01 -> first function<br/>";
    }
    public function ssecond(){
        echo "Interface 02 -> second function<br/>";
    }
}

$object = new MulInte();
