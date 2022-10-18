<?php

require 'src/model/customer.php';
//use store\model\customer; //process 02
use store\model; //process 03

//$customer = new \store\model\Customer("namespace"); // processs 01
//$customer = new customer("namespace process 02"); //process 02
$customer = new model\Customer("namespace process 03");

echo $customer->displayName();
?>