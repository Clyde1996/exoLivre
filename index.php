<h1>Exercice Livre</h1>

<h2><u>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.</u></h2>

<ul>
    <li>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.</li>
    <li>Une méthode toString() sera appréciée dans chacune de vos classes.</li>
    <li>Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :</li>
</ul>

<h2>Livres De Stephen King</h2>
<ul>
    <li><mark>Ca (1986) : 1338 pages / 20€</mark></li>
    <li><mark>Simetierre (1983) : 374 pages / 15€</mark></li>
    <li><mark>La Fléau (1978) : 823 pages / 14€ </mark></li>
    <li><mark>Shining (1977) : 447 pages / 16€  </mark></li>
    
</ul>
<?php

spl_autoload_register(function($class_name){
    require 'classes/'. $class_name . '.php';
});


$auteur1 = new Auteur("King", "Stephen");

$livre1 = new Livre("Ca", "(1986)", 1338, "20€", $auteur1);
$livre2 = new Livre("Simetierre", "(1983)", 374, "15€", $auteur1);
$livre3 = new Livre("La Fléau", "(1978)", 823, "14€", $auteur1);
$livre4 = new Livre("Shining", "(1977)", 447, "16€", $auteur1);


echo $auteur1->afficherLivres();



// echo "Livres De " . $auteur1 . "<br/>";


// echo  $livre1 . "<br/>";
// echo $livre2 . "<br/>";
// echo $livre3 . "<br/>";
// echo $livre4 . "<br/>";












?>