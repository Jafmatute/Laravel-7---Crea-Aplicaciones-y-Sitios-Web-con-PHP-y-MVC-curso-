<?php include 'includes/header.php';
/**
 * Métodos de una clase
 */

class MenuRestaurant
{
    public $nombre = 'Nombre del Producto';
    public $precio = 0;

    public function obtenerProductoNombre()
    {
        echo 'El producto ' . $this->nombre . ' tiene un precio de ' . $this->precio;
    }
}


// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = 'Coca Cola';
$bebida->precio = 20;
$bebida->obtenerProductoNombre();
echo '<br>';
$postre = new MenuRestaurant();
$postre->nombre = 'Pastel';
$postre->precio = 220;
$postre->obtenerProductoNombre();
