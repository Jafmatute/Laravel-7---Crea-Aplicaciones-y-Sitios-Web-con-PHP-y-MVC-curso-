<?php include 'includes/header.php';
/**
 * Modificadores de acceso(public, private y protected)
 * Definción
 *  public -- Se puede acceder en cualquier lugar, ya sea en la clase o en el objeto
 * protected -- se puede acceder unicamente en la clase(por medio de getters)
 *  private --   no puede ser accedio por los hijos, solo por su propia clase
 */
class MenuRestaurant
{

    private $nombre;
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


$postre = new Postre('Pastel de fresa', 2000, '500k');
//accediendo por el objeto
echo $postre->nombre;

echo '<br>';
//protected por medio de la clase
echo $postre->getPrecio();
