<?php
require_once '../vendor/autoload.php';
use App\classes\FullName;
$obj=new FullName($_POST);
$result= $obj->getNmame();
include 'index.php';
