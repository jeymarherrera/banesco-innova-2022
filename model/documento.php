<!-- model cliente -->

<?php
require_once 'model/db.php';
class Documento
{
	private $pdo;
	private $msg;

	public $ID_CLIENTE;
	public $ID_CODIGO_IMG;
	public $IMG;
	public $Nombre;
	public $telefono;
	public $tipo;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function RegistrarDocumento(Documento $data)
	{
		try {
			$sql = "INSERT INTO Documento (ID_CLIENTE,ID_CODIGO_IMG,IMG,Nombre,tipo) 
		        VALUES (?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->ID_CLIENTE,
						$data->ID_CODIGO_IMG,
						$data->IMG,
						$data->Nombre,
						$data->tipo
					)
				);
			$this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			/* if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			} */
		}
		return $this->msg;
	}
}
