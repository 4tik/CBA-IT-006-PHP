<?php

class PClass {
    private $privateValue="Parent Private Property";
    public $publicValue="Parent Publci Property";
    protected $protectedValue="Parent Protected Property";
} //parent classs

class CClass extends PClass
{
    private $cPrivate="Child private property";
    public $cPublic="Child public property";
    protected $cProtected="Child protected property";
} //child class


$object = new CClass();

echo $object->publicValue;
echo $object->protectedValue;

?>