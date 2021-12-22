<?php

// Dépendances
require_once "models/Product.php";
require_once "services/Session.php";
require_once 'services/utils.php';
Session::start();


$Mproduct=new Product;
$products = $Mproduct->findAll();
//récupération de l'id pour la suppression

$id=$_GET['id'];

$delete=$Mproduct->delete($id);


$pagePath = 'product';

// Rendu de la vue
render(__DIR__."/views/$pagePath", compact('Mproduct','products','id','delete'));