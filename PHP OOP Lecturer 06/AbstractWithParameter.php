<?php
abstract class AbstractWithParameter
{
    abstract public function MyValues($number1, $number2);
}

class AbstractChild extends AbstractWithParameter
{
    private $number1, $number2;
    public function MyValues($number1, $number2)
    {
        $this->number1=$number1;
        $this->number2=$number2;
    }

    public function Sumation()
    {
        echo ($this->number1+$this->number2);
    }
}

$object = new AbstractChild();
$object->MyValues(20, 40);
$object->Sumation();
?>