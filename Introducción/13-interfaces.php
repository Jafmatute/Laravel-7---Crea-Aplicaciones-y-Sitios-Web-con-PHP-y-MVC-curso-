 <?php include 'includes/header.php';
    /**
     * Interface plantilla(estructura) para mis clases
     * -- solo contienen métodos
     * -- debe estar declarados de la misma manera.
     */
    interface RestauranteInterface
    {
        public function getNombre();
        public function getPrecio(): int;
        public function setPrecio($precio);
    }

    class MenuRestaurant implements RestauranteInterface
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
        public function getPrecio(): int
        {
            return $this->precio;
        }

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }
    }


    $menu = new MenuRestaurant('Platillo', 100);
    var_dump($menu);
    echo '<br>';
    $menu->setPrecio(200);
    var_dump($menu);
