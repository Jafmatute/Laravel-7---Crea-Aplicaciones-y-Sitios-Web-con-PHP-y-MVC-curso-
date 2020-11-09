<?php include 'includes/header.php';
/**
 * Problemas que soluciona la herencia(repetir mucho código)
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

class Bebida
{
    public $nombre;
    public $precio;
    public $medida;

    public function __construct($nombre, $precio, $medida)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->medida = $medida;
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
     * Get the value of medida
     */
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre
{
    public $nombre;
    public $precio;
    public $peso;

    public function __construct($nombre, $precio, $peso)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->peso = $peso;
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
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }
}

$bebida = new Bebida('Jugo de Naranja', 30, 'Bebidas');
var_dump($bebida);

$bebida = new Postre('Pastel de Chocolate', 300, '150g');
var_dump($bebida);
