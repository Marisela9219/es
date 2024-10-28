<h1 class="page-header">Clientes</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Empresa&a=Registrarc">Nuevo cliente</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th style="width:180px;">Direccion</th>
            <th style="width:180px;">Colonia</th>
            <th style="width:180px;">Ciudad</th>
            <th style="width:180px;">CP</th>
            <th style="width:180px;">Telefono</th>
            <th style="width:180px;">Estado</th>
            <th style="width:180px;">Pais</th>
            <th style="width:180px;">RFC</th>
            <th style="width:180px;">Grupo empresa</th>
            
            
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listarc() as $r): ?>
        <tr>
            <td><?php echo $r->cli_nombre; ?></td>
            <td><?php echo $r->cli_direccion; ?></td>
            <td><?php echo $r->cli_colonia; ?></td>
            <td><?php echo $r->cli_ciudad; ?></td>
            <td><?php echo $r->cli_cp; ?></td>
            <td><?php echo $r->cli_telefono; ?></td>
            <td><?php echo $r->cli_estado; ?></td>
            <td><?php echo $r->cli_pais; ?></td>
            <td><?php echo $r->cli_rfc; ?></td>
            <td><?php echo $r->cli_grupo_cliente; ?></td>
            
            
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Empresa&a=Eliminarc&cli_id=<?php echo $r->cli_id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
