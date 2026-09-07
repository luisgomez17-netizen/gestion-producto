<h1> Listado Proveedor </h1>

<table border="1">
    <tr>
        <th>nombre</th>
        <th>ciudad</th>
        <th>direccion</th>
    </tr>
    <?php foreach ($proveedor as $proveedor): ?>
            <tr>
                <td><?= $proveedor['nombre'] ?></td>
                <td><?= $proveedor['ciudad'] ?></td>
                <td><?= $proveedor['direccion'] ?></td>
            </tr>
        <?php endforeach; ?>


</table>