<?php
interface Calculation{
    public function sum();
}
class TwoNumber implements Calculation{
    private $num1, $num2;
    public function __construct($pNum1, $pNum2){
        $this->num1=$pNum1;
        $this->num1=$pNum2;
    }
    public function sum(){
        return ($this->num1+$this->num2);
    }
}
class ThreeNumber implements Calculation{
    private $num1, $num2, $num3;
    public function __construct($pNum1, $pNum2, $pNum3){
        $this->num1=$pNum1;
        $this->num1=$pNum2;
        $this->num3=$pNum3;
    }
    public function sum(){
        return ($this->num1+$this->num2+$this->num3);
    }
}

$two = new TwoNumber(5,3);
$three = new ThreeNumber(6,4,9);

echo "Sum of Two Numbers : ".$two->sum();
echo "<br/>Sum  of Three Numbers : ".$three->sum();
