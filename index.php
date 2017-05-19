<?php
require_once 'NumberToWord.php';

$number='123';
$obj=new NumberToWord();

echo $obj->convert($number);
?>