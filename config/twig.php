<?php

require_once __DIR__ . '/../vendor/autoload.php';

//FilesystemLoader demande en paramètre l'emplacement du répértoire où se trouve les fichiers des Vues
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');

//prend l'objet loader en paramètre et sera accessible à tous les autres fichiers qui utiliseront un require de ce fichier de configuration
$twig = new Twig\Environment($loader, ['debug' => true]);   
$twig->addExtension(new Twig\Extension\DebugExtension());
