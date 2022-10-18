<?php

class ClassA
{
    public function classA_function()
    {
        echo "Class A Function.";
    }
}

class ClassB extends ClassA
{
    public function classB_Function()
    {
        echo "Class B Function.";
    }
}

$objectB = new ClassB();
var_dump($objectB);
$objectB->classA_function();

?>