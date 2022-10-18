<?php
abstract class PolyAbsstract{
    abstract public function avg();
}

class TwoAvg extends PolyAbsstract{
    private $num1, $num2;
    public function __construct($pNum1, $pNum2){
        $this->num1=$pNum1;
        $this->num2=$pNum2;
    }
    public function avg(){
        return (($this->num1+$this->num2)/2);
    }
}

class ThreeAvg extends PolyAbsstract{
    private $num1, $num2,$num3;
    public function __construct($pNum1, $pNum2, $pNum3)
    {
        $this->num1=$pNum1;
        $this->num2=$pNum2;
        $this->num3=$pNum3;
    }
    public function avg(){
        return (($this->num1+$this->num2+$this->num3)/3);
    }
}

$two_avg = new TwoAvg(5,6);
$three_avg = new ThreeAvg(7,8,9);

echo "Ave of Two Numbers : ".$two_avg->avg();
echo "<br/>Ave of Three Numbers : ".$three_avg->avg();
?>