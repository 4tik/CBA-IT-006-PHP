<?php
class ConsClass
{

    public function __construct()
    {
        echo "Calling  __construct<br/>";
        $this->displayFunction();
        echo "<br/>back to __construct";
    }

    public function displayFunction()
    {
        echo "calling function.";
    }
}

$object = new ConsClass();
//$object->displayFunction();
