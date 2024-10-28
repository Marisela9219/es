<?php
class Empresa
{
	private $pdo;
    
   
    public $gem_id;
    public $gem_nombre;
  

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM grupo_empresas");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($gem_id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM grupo_empresas WHERE gem_id = ?");
			          

			$stm->execute(array($gem_id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($gem_id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM grupo_empresas WHERE gem_id = ?");			          

			$stm->execute(array($gem_id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE grupo_empresas SET 
						gem_nombre          = ?
						
				    WHERE gem_id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->gem_nombre,
                        $data->gem_id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(empresa $data)
	{
		try 
		{
		$sql = "INSERT INTO grupo_empresas (gem_nombre) 
		        VALUES (?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->gem_nombre
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Listarc()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM clientes");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtenerc($cli_id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM clientes WHERE cli_id = ?");
			          

			$stm->execute(array($cli_id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminarc($cli_id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM clientes WHERE cli_id = ?");			          

			$stm->execute(array($cli_id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizarc($data)
	{
		try 
		{
			$sql = "UPDATE clientes SET 
						cli_nombre,
						cli_direccion,
						cli_colonia,
						cli_ciudad,
						cli_cp,
						cli_telefono,
						cli_estado,
						cli_pais,
						cli_rfc,
						cli_grupo_cliente
						
						          = ?
						
				    WHERE cli_id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->cli_nombre,
                        $data->cli_direccion,
						$data->cli_colonia,
						$data->cli_ciudad,
						$data->cli_cp,
						$data->cli_telefono,
						$data->cli_estado,
						$data->cli_pais,
						$data->cli_rfc,
						$data->cli_grupo_cliente,
						$data->cli_id
						
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrarc(empresa $data)
	{
		try 
		{
		$sql = "INSERT INTO clientes (cli_nombre,
						cli_direccion,
						cli_colonia,
						cli_ciudad,
						cli_cp,
						cli_telefono,
						cli_estado,
						cli_pais,
						cli_rfc,
						cli_grupo_cliente) 
		        VALUES (?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    	$data->cli_nombre,
                    	$data->cli_direccion,
						$data->cli_colonia,
						$data->cli_ciudad,
						$data->cli_cp,
						$data->cli_telefono,
						$data->cli_estado,
						$data->cli_pais,
						$data->cli_rfc,
						$data->cli_grupo_cliente
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}