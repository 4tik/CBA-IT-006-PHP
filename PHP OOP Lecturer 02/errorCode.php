<?php
class ErroClass {
    public $checkPub; //ok
    private $checkPrv; //ok
    protected $checkPrt;

    public function pubFunc()
    {
        $this->checkPrv="value";
    }

    private function prvFunc()
    {
        $this->checkPrv="value";
    }

    protected function prtFunc()
    {

    }
}

$errorObj = new ErroClass();
