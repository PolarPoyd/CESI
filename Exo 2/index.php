<?php

require_once 'Pomme.php';
require_once 'Cerise.php';
require_once 'Panier.php';

// Création des fruits
$pomme1 = new Pomme(150, 0.50);
$cerise1 = new Cerise(10, 0.20);
$pomme2 = new Pomme(200, 0.70);
$cerise2 = new Cerise(15, 0.25);

// Création de deux paniers
$panier1 = new Panier();
$panier2 = new Panier();

// Ajout des fruits dans les paniers
$panier1->addFruit($pomme1);
$panier1->addFruit($cerise1);
$panier2->addFruit($pomme2);
$panier2->addFruit($cerise2);

// Affichage du contenu des paniers
echo "Contenu du Panier 1:\n";
$panier1->showPanier();

echo "\nContenu du Panier 2:\n";
$panier2->showPanier();