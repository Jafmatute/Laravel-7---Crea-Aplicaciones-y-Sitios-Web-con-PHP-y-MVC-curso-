<?php include 'includes/header.php';
/** static
 * Métodos estaticos, no requiere ser instanciados
 */

class DB
{

    public static function conectarDB()
    {

        echo 'conectar a la base de datos';
    }
}

class Email
{


    public static function enviarEmail()
    {
        echo 'Enviando email';
    }
}

DB::conectarDB();

echo '<br>';

Email::enviarEmail();
