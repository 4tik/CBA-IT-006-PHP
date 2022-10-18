<?php

class DefaultConstructor
{
    private $name, $age, $email;

    //Default Constructor
    //Parameter-less Constructor
    public function __construct()
    {
        echo "Calling default __construct<hr/>";
        $this->name="Default Constructor";
        $this->age=10;
        $this->email="default@contruct.com";
    }

    public function displayInformation()
    {
        echo "Name : ".$this->name."<br/>";
        echo "Age : ".$this->age."<br/>";
        echo "E-mail: ".$this->email."<br/>";
    }
}

$obj = new DefaultConstructor();
$obj->displayInformation();
?>