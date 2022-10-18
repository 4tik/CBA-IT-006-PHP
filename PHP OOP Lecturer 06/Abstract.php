<?php
abstract class Person
{
    public $name;
    public function __construct($passsingName)
    {
        $this->name=$passsingName;
    }
    abstract public function display();
}
class Student extends Person
{
    public function display()
    {
        echo $this->name;
    }
}

$object = new Student("Atikur");
$object->display();
