<!-- model cliente -->

<?php

require_once 'model/db.php';

class Servicio
{
    private $pdo;
	private $msg; 

    // public $id_servicio;
    public $nombre;
    public $tipoMposPos;

    public function __construct()
    {
        try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }

    public function Registrar(Servicio $data)
	{
		try {
			$sql = "INSERT INTO servicio (nombre, tipo_mpos_pos) 
		        VALUES (?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nombre,
						$data->tipoMposPos
					)
				);
			// $this->msg = "Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) {
			/* if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg = "Correo electrónico ya está registrado en el sistema&t=text-danger";
			} else {
				$this->msg = "Error al guardar los datos&t=text-danger";
			} */
		}
		// return $this->msg;
	}
}
