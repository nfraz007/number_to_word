<?php
require_once 'NumberToWord.php';

$number = trim($_REQUEST["number"]);
$obj=new NumberToWord();

try{
	echo $obj->convert($number);
}catch(Exception $e){
	echo $e->getMessage();
}
?>