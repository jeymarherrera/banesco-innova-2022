<!-- model representante -->

<?php
require_once 'model/db.php';
class Establecimiento
{
	private $pdo;
	private $msg;
/* 
    ID_ESTABLECIMIENTO INT primary key, 
    RAZON_SOCIAL VARCHAR(50),
     RUC_CLIENTE VARCHAR(50) UNIQUE,
     DIV_CLIENTE VARCHAR(50) UNIQUE, 
     NOMBRE VARCHAR(50), 
     TIEMPO_OPERACIONAL DATE,
     TELEFONO VARCHAR(50),
     PAGINA_WEB VARCHAR(50),
     ID_NORMA_LOCAL INT ,
      CONSTRAINT FK_id_Cliente_TnORMA FOREIGN KEY (ID_NORMA_LOCAL)
        REFERENCES NORMA_LOCAL (ID_NORMA) , 
     ID_TIPO_LOCAL INT, 
     CONSTRAINT FK_id_Cliente_TLOCAL FOREIGN KEY (ID_TIPO_LOCAL)
        REFERENCES TIPO_LOCAL (ID_TIPO_LOCAL) , 
     ID_CODIGO_IMG VARCHAR(50),
         CONSTRAINT FK_id_Cliente_IMG FOREIGN KEY (ID_CODIGO_IMG)
        REFERENCES DOCUMENTO(ID_CODIGO_IMG) , 
     ID_SOCIEDAD INT ,  
       CONSTRAINT FK_id_Cliente_SOC FOREIGN KEY (ID_SOCIEDAD)
        REFERENCES SOCIEDAD(ID_SOCIEDAD) ,
     ID_CLIENTE INT, */

     public $razonSocial;
     public $rucCliente;
     public $identificaion;
     public $ciudadania;
     public $telefono;
     public $correo;


	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Db::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(Establecimiento $data)
	{
		try {
			$sql = "INSERT INTO establecimiento (razon_social,RUC_CLIENTE,DIV_CLIENTE,NOMBRE,TIEMPO_OPERACIONAL,TELEFONO,PAGINA_WEB,ID_NORMA_LOCAL,ID_TIPO_LOCAL) 
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
