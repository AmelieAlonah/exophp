<?php

require __DIR__ . '/../vendor/autoload.php';


require __DIR__ . '/../App/Utils/Database.php';
require __DIR__ . "/../App/Controllers/CoreController.php";
require __DIR__ . '/../App/Models/CoreModel.php';

require __DIR__ . '/../App/Models/Product.php';
require __DIR__ . '/../App/Models/Brand.php';

require __DIR__ . "/../App/Controllers/MainController.php";
require __DIR__ . "/../App/Controllers/CatalogController.php";


// Front controller -> Point d'entrée unique de l'application
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);


// Route pour la homepage
$router->map(
    'GET', 
    '/', 
    [
        'controller' => 'MainController',
        'method' => 'home'
    ], 
    'home'
);
// Route pour les marques de produits
$router->map(
    'GET', 
    '/marque/[i:id]', 
    [
        'controller' => 'CatalogController',
        'method' => 'brand'
    ], 
    'brand'
);
// Route pour les Types de produits
$router->map(
    'GET', 
    '/produit/[i:id]', 
    [
        'controller' => 'CatalogController',
        'method' => 'product'
    ], 
    'product'
);


// Destination de la route
$match = $router->match();

// Destination de la route
$destination = $match['target'];

// Dispatcher
$controllerName = $destination['controller'];
$methodName = $destination['method'];


$controller = new $controllerName();
$controller->$methodName($match['params']);