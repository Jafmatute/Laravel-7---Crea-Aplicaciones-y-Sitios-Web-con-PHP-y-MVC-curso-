<?php include 'includes/header.php';
/**
 * Construct(es una función que se ejecuta autoaticamente cuando se instancia una clase)
 */
class MenuRestaurant
{
    public $nombre;
    public $precio;
    public $categoria;

    public function __construct($nombre, $precio, $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}

$bebida = new MenuRestaurant('Jugo de Naranja', 30, 'bebidas');

echo $bebida->getNombre();
echo '<br>';
echo $bebida->getCategoria();
