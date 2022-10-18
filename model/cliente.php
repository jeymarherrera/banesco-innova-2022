<!-- model cliente -->

<?php
require_once 'model/db.php';
class Cliente
{
	private $pdo;
	private $msg;

	public $identificaion;
	public $nombre;
	public $apellido;
	public $nacionalidad;
	public $telefono;
	public $correo;
	public $identificaion_img;
	public $id_sociedad;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function RegistrarCliente(Cliente $data)
	{
		try {
			$sql = "INSERT INTO usuario (identifiacion,nombre,apellido,nacionalidad,telefono,correo,id_sociedad) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->identificaion,
						$data->nombre,
						$data->apellido,
						$data->nacionalidad,
						$data->telefono,
						$data->correo,
						$data->id_sociedad
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

	public function Consultar(Cliente $data)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ? AND pass=?");
			$stm->execute(array($data->email, $data->pass));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
