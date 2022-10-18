<?php

class DestructorClass
{
    public function __construct()
    {
        echo "Calling __construct<br/>";
    }

    public function __destruct()
    {
        echo "<br/>Calling __destruct";
    }
}

$object = new DestructorClass();
echo "I am here............";

