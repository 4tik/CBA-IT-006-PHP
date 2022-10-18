<?php

class ConstructorSumTwoNo
{
    private $number1, $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2= $number2;
    }

    public function returnSum()
    {
        return ($this->number1+$this->number2);
    }
}

$sumObject = new ConstructorSumTwoNo(107, 1);
echo "Sum of Two Number : ".$sumObject->returnSum();

?>

