<?php include_once (VIEWS . 'header.php') ?>
<div class="card p-4 bg-light">
    <div class="card-header">
        <h1 class="text-center">Administración de Productos</h1>
    </div>
    <div class="card-body">
        <table class="table table-striped text-center" style="width: 100%">
            <thead>
            <th>Id</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Modificar</th>
            <th>Borrar</th>
            </thead>
            <tbody>
            <?php foreach ($data['data'] as $product): ?>
                <tr>
                    <td><?= $product->id ?></td>
                    <td><?= $data['type'][$product->type - 1]->description ?></td>
                    <td><?= $product->name ?></td>
                    <td>
                    <?php
                     $description = html_entity_decode($product->description);
                    if (strlen($description) > 30) {
                    echo substr($description, 0, 200) . '...';
                    } else {
                    echo $description;
                    }
                    ?>
                    </td>
                    
                    <td><a href="<?= ROOT ?>adminProduct/update/<?= $product->id ?>" class="btn btn-info">Modificar</a></td>
                    <td><a href="<?= ROOT ?>adminProduct/delete/<?= $product->id ?>" class="btn btn-danger">Borrar</a></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm-6">
                <a href="<?= ROOT ?>adminProduct/create" class="btn btn-success">
                    Crear producto
                </a>
            </div>
        </div>
    </div>
</div>
<?php include_once (VIEWS . 'footer.php') ?>
