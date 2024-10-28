<?php
require_once 'model/empresa.php';

class EmpresaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new empresa();
    }
    
    public function Index(){
        require_once 'view/template/header.php';
        require_once 'view/empresas/empresa.php';
        require_once 'view/template/footer.php';
    }
    
    public function Registrar(){
        $alm = new empresa();
        
        if(isset($_REQUEST['gem_id'])){
            $alm = $this->model->Obtener($_REQUEST['gem_id']);
        }
        
        require_once 'view/template/header.php';
        require_once 'view/empresas/empresa-registrar.php';
        require_once 'view/template/footer.php';
    }

    public function Actualizar(){
        $alm = new empresa();
        
        if(isset($_REQUEST['gem_id'])){
            $alm = $this->model->Obtener($_REQUEST['gem_id']);
        }
        
        require_once 'view/template/header.php';
        require_once 'view/empresas/empresa-editar.php';
        require_once 'view/template/footer.php';
    }
    
    public function Guardar(){
        $alm = new empresa();
        
        $alm->gem_id = $_REQUEST['gem_id'];
        $alm->gem_nombre = $_REQUEST['gem_nombre'];
        
        $this->model->Registrar($alm);
        
        header('Location: index.php');
    }

     public function Update(){
        $alm = new empresa();
        
        $alm->gem_id = $_REQUEST['gem_id'];
        $alm->gem_nombre = $_REQUEST['gem_nombre'];
        
        $this->model->Actualizar($alm);
           
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['gem_id']);
        header('Location: index.php');
    }



    public function Cliente(){
        $alm = new empresa();

        require_once 'view/template/header.php';
        require_once 'view/clientes/cliente.php';
        require_once 'view/template/footer.php';
    }
    

    public function Registrarc(){
        $alm = new empresa();
        
       if(isset($_REQUEST['cli_id'])){
            $alm = $this->model->Obtenerc($_REQUEST['cli_id']);
        }
        
        require_once 'view/template/header.php';
        require_once 'view/clientes/cliente-registrar.php';
        require_once 'view/template/footer.php';
    }

    public function Actualizarc(){  
        $cliente = new empresa();
        
        if(isset($_REQUEST['cli_id'])){
            $cliente = $this->model->Obtenerc($_REQUEST['cli_id']);
        }
        
        require_once 'view/template/header.php';
        require_once 'view/clientes/cliente-editar.php';
        require_once 'view/template/footer.php';
    }
    
    public function Guardarc(){
        $alm = new empresa();
        
        $alm->cli_id = $_REQUEST['cli_id'];
        $alm->cli_nombre = $_REQUEST['cli_nombre'];
        $alm->cli_direccion = $_REQUEST['cli_direccion'];
        $alm->cli_colonia = $_REQUEST['cli_colonia'];
        $alm->cli_ciudad = $_REQUEST['cli_ciudad'];
        $alm->cli_cp = $_REQUEST['cli_cp'];
        $alm->cli_telefono = $_REQUEST['cli_telefono'];
        $alm->cli_estado = $_REQUEST['cli_estado'];
        $alm->cli_pais = $_REQUEST['cli_pais'];
        $alm->cli_rfc = $_REQUEST['cli_rfc'];
        $alm->cli_grupo_cliente = $_REQUEST['cli_grupo_cliente'];
        //var_dump($alm);
        $this->model->Registrarc($alm);
        
        header('Location: http://localhost/Empresas/index.php?c=Empresa&a=Cliente');
    }

     public function Updatec(){
        $cliente = new empresa();
        
        $cliente->cli_id = $_REQUEST['cli_id'];
        $cliente->cli_nombre = $_REQUEST['cli_nombre'];
        $cliente->cli_direccion = $_REQUEST['cli_direccion'];
        $cliente->cli_colonia = $_REQUEST['cli_colonia'];
        $cliente->cli_ciudad = $_REQUEST['cli_ciudad'];
        $cliente->cli_cp = $_REQUEST['cli_cp'];
        $cliente->cli_telefono = $_REQUEST['cli_telefono'];
        $cliente->cli_estado = $_REQUEST['cli_estado'];
        $cliente->cli_pais = $_REQUEST['cli_pais'];
        $cliente->cli_rfc = $_REQUEST['cli_rfc'];
        $cliente->cli_grupo_cliente = $_REQUEST['cli_grupo_cliente'];
        
        //var_dump($cliente);
        $this->model->Actualizarc($cliente);
           
        
        header('Location: http://localhost/Empresas/index.php?c=Empresa&a=Cliente');
    }
    
      public function Eliminarc(){
        $this->model->Eliminarc($_REQUEST['cli_id']);
        
        header('Location: http://localhost/Empresas/index.php?c=Empresa&a=Cliente');
    }
}