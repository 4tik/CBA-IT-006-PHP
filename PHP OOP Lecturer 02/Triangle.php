<?php

class Area{

    private $width;
    private $height;

    public function calculation($w, $h)
    {
        $this->width=$w;
        $this->height=$h;
        return ($this->width*$this->height)/2;
    }

}

$myObject = new Area();
echo $myObject->calculation(12, 7);


?>