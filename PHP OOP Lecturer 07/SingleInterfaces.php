<?php
interface SingleInterface{
    public function Interface01();
    public function Interface02();
}

class SingleInterfaceClass implements SingleInterface{
    private $value1, $value2;
    public function __construct($pValue1, $pValue2){
        $this->value1=$pValue1;
        $this->value2=$pValue2;
    }
    public function Interface01(){
        echo "calling interface 01.<br/>".$this->value1;
    }
    public function Interface02(){
        echo "<br/>calling interface 02<br/>".$this->value2;
    }
}
$object = new SingleInterfaceClass(10, 12);
$object->Interface01();
$object->Interface02();
