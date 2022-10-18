<?php
class CopyConstructor{
    public $name;
    public function __construct()
    {    }
    public function show()
    {
        echo "Name : ".$this->name;
    }
    public function CopyCon(CopyConstructor $objectParameter)
    {
        $this->name=$objectParameter->name."(copy)";
    }
}

$object = new CopyConstructor();
$object->name = "first object create.";
$object->show();

echo "<br/>------ After Copy ------<br/>";

$copyObject = new CopyConstructor();

$copyObject->CopyCon($object);
$copyObject->show();
