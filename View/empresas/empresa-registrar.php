<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=empresa">Empresas</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-empresa" action="?c=empresa&a=Guardar" method="post" enctype="multipart/form-data">    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="gem_nombre" class="form-control" placeholder="Ingrese el nombre de la empresa" data-validacion-tipo="requerido|min:3" />
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