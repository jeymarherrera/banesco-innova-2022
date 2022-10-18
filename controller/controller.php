<!-- controlador - rutas -->

<?php
session_start();// Comienzo de la sesión

require("model/cliente.php");
require("model/clienteServicio.php");
require("model/representante.php");
class Controller
{
    private $modelCli;
    private $modelRepre;
    /* private $modelCli;
    private $modelCli;
    private $modelCli;
    private $modelCli; */
    private $resp;

    public function __construct()
    {
        $this->modelCli = new Cliente();
        $this->modelRepre = new Representante();

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
        $cliente = new Cliente();
        
        $cliente->identificaion = $_REQUEST['identifiacion'];
        $cliente->nombre = $_REQUEST['nombre'];
        $cliente->apellido = $_REQUEST['apellido'];
        $cliente->nacionalidad = $_REQUEST['nacionalidad'];
        $cliente->telefono = $_REQUEST['telefono'];
        $cliente->correo = $_REQUEST['correo'];  
        $cliente->id_sociedad = $_REQUEST['id_sociedad'];
        $this->resp= $this->modelCli->RegistrarCliente($cliente);

        $representante = new Representante();

        $representante->nombre = $_REQUEST['nombre'];
        $representante->apellido = $_REQUEST['apellido'];
        $representante->identificaion = $_REQUEST['identifiacion'];
        $representante->ciudadania = $_REQUEST['ciudadania'];
        $representante->telefono = $_REQUEST['telefono'];
        $representante->correo = $_REQUEST['correo'];  
        $representante->cargo = $_REQUEST['cargo'];
        $representante->direccion = $_REQUEST['direccion'];
        $representante->id_cliente = $_REQUEST['id_cliente'];
         $this->resp = $this->modelRepre->RegistrarRepre($representante);

        $clienteServicio = new ClienteServicio();

        $clienteServicio->idServicio = $_REQUEST['idServicio'];


        header('Location: ?op=crear&msg='.$this->resp);
    }



    public function Ingresar()
    {
        $ingresarUsuario = new Cliente();

        $ingresarUsuario->email = $_REQUEST['correo'];
        $ingresarUsuario->pass = ($_REQUEST['contrasena']);

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
