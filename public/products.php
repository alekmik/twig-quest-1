<?php


// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
echo $twig->render('product.html.twig', ['toto' => $products]); //il faudra donc appelé toto dans la vue