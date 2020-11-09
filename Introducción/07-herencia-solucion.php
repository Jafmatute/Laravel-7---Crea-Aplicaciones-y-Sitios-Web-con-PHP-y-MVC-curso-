<?php include 'includes/header.php';
/**
 * Herencia solución
 */

class MenuRestaurant
{
    public $nombre;
    public $precio;

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

//Sub clase o clase hijo de MenuRestaurant
class Bebida extends MenuRestaurant
{

    public $medida;

    public function __construct($nombre, $precio, $medida)
    {
        parent::__construct($nombre, $precio);

        $this->medida = $medida;
    }

    //Reescribir el método, siempre debe llamarse igual al padre y sirve para hacer algo distinto en el método
    public function getPrecio()
    {
        return 'El precio de la bebida es: ' . $this->precio;
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

$bebida = new Bebida('Coca cola', 25, '300ml');
var_dump($bebida);
echo '<br>';
echo $bebida->getPrecio();

echo '<br>';
$postre = new Postre('Pastel de chocolate', 1000, '100g');
var_dump($postre);
