<h1 class="page-header">Empresas</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Empresa&a=Registrar">Nuevo empresa</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->gem_nombre; ?></td>
            
            <td>
                <a href="?c=Empresa&a=Actualizar&gem_id=<?php echo $r->gem_id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Empresa&a=Eliminar&gem_id=<?php echo $r->gem_id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
