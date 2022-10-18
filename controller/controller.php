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
        
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['correo'];  
        $usuario->pass = md5($_REQUEST['password1']);    
      
        $this->resp= $this->model->Registrar($usuario);

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
