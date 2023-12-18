<?php 

require_once "BaseClass.php";
require_once "SubClass.php";

// ici on accède à une propriété publique depuis la classe elle-même
$baseObject = new BaseClass();
print $baseObject->publicProperty.PHP_EOL;

// Ici nous accèdons à une propriété publique depuis la sous ckasse
$subObject = new SubClass();
print $subObject->publicProperty.PHP_EOL;

// ici cette ligne renverra une erreur , car la propriété est protégée donc pas accèssible ici
// il nous faut un getter

// print $baseObject->protectedProperty.PHP_EOL;

// ici nous accèdons à la valeur grâce à la méthode publique getProtectedProperty()
print $baseObject->getProtectedProperty().PHP_EOL;

// Ici nous accèdons à la propriété protégée depuis la sous-classe 
print $subObject->getParentProtectedProperty().PHP_EOL;

// Cette ligne renverra une erreur, il faut à nouveau un getter

// print $baseObject->privateProperty.PHP_EOL;

// Ici, avec une méthode get nous pouvons accèder à la propriété 
print $baseObject->getPrivateProperty().PHP_EOL;

// Ici, nous accèdons à la propriété grâce au getter de la classe parent
print $subObject->getParentPrivateProperty().PHP_EOL;