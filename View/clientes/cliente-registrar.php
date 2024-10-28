<h1 class="page-header">
    Nuevo Registro
</h1>
<?php 

?>
<ol class="breadcrumb">
  <li><a href="?c=empresa">Empresas</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-empresa" action="?c=empresa&a=Guardarc" method="post" enctype="multipart/form-data">
    <input type="hidden" name="cli_id" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="cli_nombre"  class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="cli_direccion" class="form-control" placeholder="Ingrese su direccion" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Colonia</label>
        <input type="text" name="cli_colonia" class="form-control" placeholder="Ingrese la colonia en que vive" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="cli_ciudad" class="form-control" placeholder="Ingrese la Ciudad" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>CP</label>
        <input type="text" name="cli_cp" class="form-control" placeholder="Ingrese CP" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="cli_telefono" class="form-control" placeholder="Ingrese su Telefono" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Estado</label>
        <select type="text" name="cli_estado" class="form-control">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
        
    </div>

    <div class="form-group">
        <label>Pais</label>
        <select type="text" name="cli_pais" value="<?php echo $alm->cli_pais; ?>" class="form-control">
            <option value="El Salvador">El Salvador</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Honduras">Honduras</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Panama">Panama</option>
            <option value="Mexico">Mexico</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Canada">Canada</option>
            <option value="Colombia">Colombia</option>
        </select>
    </div>

    <div class="form-group">
        <label>RFC</label>
        <input type="text" name="cli_rfc" class="form-control" placeholder="Ingrese RFC" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Grupo Empresa</label>
        <input type="text" name="cli_grupo_cliente" class="form-control"/>
    </div>
    
   
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-empresa").submit(function(){
            return $(this).validate();
        });
    })
</script>