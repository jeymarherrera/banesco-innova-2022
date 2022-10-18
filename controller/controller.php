<!-- controlador - rutas -->

<?php
session_start();// Comienzo de la sesión

require("model/cliente.php");
class Controller
{
    private $model;
    private $resp;

    public function __construct()
    {
        $this->model = new Cliente();
    }

    public function Index(){
        //Le paso los datos a la vista
        require("view/home.php");
    }  

    public function Acceder()
    {
        $ingresarUsuario = new Cliente();

        $ingresarUsuario->email = $_REQUEST['correo'];
        $ingresarUsuario->pass = md5($_REQUEST['contrasena']);

        //Verificamos si existe en la base de datos
        if ($resultado = $this->model->Consultar($ingresarUsuario)) {
            $_SESSION["acceso"] = true;
            $_SESSION["user"] = $resultado->nombre . " " . $resultado->apellido;
            header('Location: ?op=correcto');
        }
        else {
            header('Location: ?&msg=Usuario o contraseña incorrecto, intentelo otra vez');
        }
    }

    public function RecuperarCuenta()
    {
        require("view/forgot-password.php");
    }

    public function AccederDashboard() {
        require("view/dashboard.php");
    }
}
