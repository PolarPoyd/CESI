<?php 

class Personne
{
    public $name = "John";
}

$personne = new Personne();
print $personne->name."\n";

// ici on accède à l'objet personne et on modifie la 
// valeur de la propriété name 

$personne->name = "Jane";
print $personne->name."\n";