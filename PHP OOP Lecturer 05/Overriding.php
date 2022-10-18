<?php
class O_Parent
{
    public function display()
    {
        echo "calling parent class";
    }
}
class O_Child extends O_Parent
{
    public function display()
    {
        echo "calling child class.<br/>";
        parent::display();
    }
}
class O_CChild extends O_Child
{
    public function display()
    {
        echo "calling 2nd chikld class<br/>";
        parent::display();
    }
}

$object = new O_CChild();
$object->display();
