<h1 class="page-header">
    <?php echo $alm->gem_id != null ? $alm->gem_nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=empresa">Empresas</a></li>
  <li class="active"><?php echo $alm->gem_id != null ? $alm->gem_nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-empresa" action="?c=empresa&a=Update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="gem_id" value="<?php echo $alm->gem_id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="gem_nombre" value="<?php echo $alm->gem_nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
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