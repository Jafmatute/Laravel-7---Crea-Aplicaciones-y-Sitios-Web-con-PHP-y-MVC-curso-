<?php

namespace empleado_2;

include 'includes/header.php';
/**
 * 2 clases no pueden tener el mismo nombre
 * -- namespaces, Sí se puede.
 * debe ser lo primero que se llame el script.
 */
require_once 'Empleado.php';

echo '<br>';

class Empleado
{

    public function __construct()
    {
        echo 'Desde nameSpace';
    }
}

$empleado = new Empleado();
