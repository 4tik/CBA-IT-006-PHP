<?php
class EncapsulationClass
{private $name, $age;
     //private property
    public function SetValues($passingName, $passingAge) //set function
    {
        $this->name=$passingName;
        $this->age=$passingAge;
    }
    public function GetValues() //get function
    {
        return "Name : ".$this->name."<br/>Age : ".$this->age;
    }
}

$object = new EncapsulationClass();
$object->SetValues("Jhon Luther", 38);
echo $object->GetValues();

