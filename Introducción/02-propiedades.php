<?php include 'includes/header.php';
/**
 * Propiedades PHP
 */
class MenuRestaurant
{
    public $nombre = '';
    public $precio = 0;
}

//Ejemplo bebida
$bebida = new MenuRestaurant();
$bebida->nombre = 'Coca Cola';
$bebida->precio = 25;
var_dump($bebida);

//Ejemplo Postré
$postre = new MenuRestaurant();
$postre->nombre = 'Pastel';
$postre->precio = 500;
var_dump($postre);
