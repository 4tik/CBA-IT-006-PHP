<?php   
class ConstructorPara
{
    private $name, $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function showInfo()
    {
        echo "Name : ".$this->name."<br/>Age: ".$this->age;
    }
}

$conParaObject = new ConstructorPara("Jhone Wick", 45);
$conParaObject->showInfo();

?>