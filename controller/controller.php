<!-- controlador - rutas -->

<?php
session_start();// Comienzo de la sesión

require("model/cliente.php");
require("model/clienteServicio.php");
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

    public function Registro(){
        //Le paso los datos a la vista
        require("view/registro.php");
    }  

    public function Login(){
        //Le paso los datos a la vista
        require("view/signin.php");
    }  

    public function AccederDashboard() {
        require("view/dashboard.php");
    }

    public function GuardarDatos(){
        $usuario = new Cliente();
        
        $usuario->identificaion = $_REQUEST['identifiacion'];
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->apellido = $_REQUEST['nacionalidad'];
        $usuario->telefono = $_REQUEST['telefono'];
        $usuario->correo = $_REQUEST['correo'];  
        $usuario->identificaion_img = $_REQUEST['identificacion_img'];
        $usuario->id_sociedad = $_REQUEST['id_sociedad'];
        $this->resp= $this->model->Registrar($usuario);


        $clienteServicio = new ClienteServicio();

        $clienteServicio->idServicio = $_REQUEST['idServicio'];


        header('Location: ?op=crear&msg='.$this->resp);
    }

    public function Ingresar()
    {
        $ingresarUsuario = new Cliente();

        $ingresarUsuario->email = $_REQUEST['correo'];
        $ingresarUsuario->pass = md5($_REQUEST['contrasena']);

        //Verificamos si existe en la base de datos
        if ($resultado = $this->model->Consultar($ingresarUsuario)) {
            $_SESSION["acceso"] = true;
            $_SESSION["user"] = $resultado->nombre . " " . $resultado->apellido;
            header('Location: ?op=permitido');
        }
        else {
            header('Location: ?&msg=Usuario o contraseña incorrecto, intentelo otra vez');
        }
    }

    public function RecuperarCuenta()
    {
        require("view/forgot-password.php");
    }

    
}
