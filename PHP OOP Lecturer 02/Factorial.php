<?php
class CalculateFactorial
{
    var $sum=1;

    public function calculation($number)
    {
        for($i=$number; $i>=1; $i--)
        {
            $this->sum*=$i;
        }
        return $this->sum;
    }
}

$facObject = new CalculateFactorial();
echo $facObject->calculation(5);

?>