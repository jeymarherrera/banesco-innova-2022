<!-- model representante -->

<?php
require_once 'model/db.php';
class Cliente
{
	private $pdo;
	private $msg;

	public $identificaion;
	public $nombre;
	public $apellido;
    public $telefono;
	public $correo;
	public $cargo;
	public $direccion;
	public $ciudadania;
    public $id_cliente;


	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Cliente $data)
	{
		try {
			$sql = "INSERT INTO representante (identifiacion,nombre,apellido,telefono,correo,cargo,direccion,ciudadania,id_cliente) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
                        $data->identificaion,
                        $data->nombre,
                        $data->apellido,
                        $data->telefono,
                        $data->correo,
                        $data->cargo,
                        $data->direccion,
                        $data->ciudadania,
                        $data->id_cliente,
					)
				);
			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			}
		}
		return $this->msg;
	}
}
