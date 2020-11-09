<?php include 'includes/header.php';
/**
 * class astract -- Es una clase que no se puede instanciar, solo sus hijos.
 */
abstract class MenuRestaurant
{
    public $nombre;
    protected $precio;

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Bebida extends MenuRestaurant
{
    public $medida;

    public function __construct($nombre, $precio, $medida)
    {
        parent::__construct($nombre, $precio);
        $this->medida = $medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant
{
    public $peso;

    public function __construct($nombre, $precio, $peso)
    {
        parent::__construct($nombre, $precio);
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}

//no se puede instanciar
//$menu = new MenuRestaurant('Nuevo elemento en el menú', 100);
// var_dump($menu);

$postre = new Postre('Pastel Fresa', 500, '100kg');
var_dump($postre);
