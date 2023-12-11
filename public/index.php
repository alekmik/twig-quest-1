<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';

//pour afficher une vue, utilisations de la méthode 'render'. Il prend en 1er paramètre le nom du fichier de vue, en 2nd paramètre la méthode de render du tableau contenant toutes les variables
echo $twig->render('home.html.twig', ['name' => $name]);
