<!-- model clienteServicio -->

<?php

require_once 'model/db.php';

class ClienteServicio
{
    private $pdo;
	private $msg; 

    // public $id_servicio;
    public $idServicio;
    public $idCliente;

    public function __construct()
    {
        try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }

    public function Registrar(ClienteServicio $data)
	{
		try {
			$sql = "INSERT INTO servicio (id_servicio, id_cliente) 
		        VALUES (?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->idServicio,
						$data->idCliente
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
