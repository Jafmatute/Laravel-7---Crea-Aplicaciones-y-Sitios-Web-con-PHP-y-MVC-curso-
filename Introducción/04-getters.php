<?php include 'includes/header.php';
/**
 * Getters (convención, son métodos)
 */
class MenuRestaurant
{
    public $nombre = 'Nombre del Producto';
    public $precio = 0;
    public $pais  = 'America Central';

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }
}

$bebida = new MenuRestaurant();
$bebida->nombre = 'Pepsi';
$bebida->precio = 21;
$bebida->pais = 'Guatemala';
echo $bebida->getNombre();
echo '<br>';
echo $bebida->getPrecio();
echo '<br>';
echo $bebida->getPais();

echo '<br>';

$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de chocolate';
$postre->precio = 500;
echo $postre->getNombre();
echo '<br>';
echo $postre->getPrecio();
echo '<br>';
echo $postre->getPais();
