<?php include 'includes/header.php';
/**
 * setters
 * Get para obtener un valor
 * Set para agregar o modificar un valor
 * protected = set
 */
class MenuRestaurant
{
    public $nombre;
    public $precio;
    protected $categoria;

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
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        //return $this;
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

$postre = new Postre('Pastel chocolate', 1000, '100kg');
$postre->setCategoria('Postre');
var_dump($postre);
