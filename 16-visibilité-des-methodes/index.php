<?php 

require_once "BaseClass.php";
require_once "SubClass.php";

$baseObject = new BaseClass();
$subObject = new SubClass();

print $subObject->getParentProtectedProperty().PHP_EOL;