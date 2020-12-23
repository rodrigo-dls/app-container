<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col md-8">

            <?php include ("includes/popup_abm.php")?>

            <table class="table table-boredered">
                <thead>
                    <tr>
                        <th>Nacionalidad</th>
                        <th>Categoría</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Zona</th>
                        <th>Envío</th>
                        <th>Detalle</th>
                        <th>Redes</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * FROM patriotas01";
                    $result = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($result)) {
                        $nacionalidad= $row['nacionalidad'];
                        $categoria   = $row['categoria'];
                        $nombre      = $row['nombre'];
                        $apodo       = $row['apodo'];
                        $telefono    = $row['telefono'];
                        $zona        = $row['zona'];
                        $envio       = $row['envio'];
                        $info        = $row['info'];
                        $whatsapp    = $row['whatsapp'];
                        $instagram   = $row['instagram'];
                        $email       = $row['email'];
                        $website     = $row['website'];
                    ?>
                            <tr>
                            <td>
                                <?php echo $nacionalidad ?>
                            </td>
                            <td>
                                <?php echo $categoria ?>
                            </td>
                            <td>
                                <?php
                                if(empty($apodo)) {
                                    echo $nombre;
                                }
                                else {
                                    echo $apodo;
                                } ?>
                            </td>
                            <td>
                                <?php echo $telefono ?>
                            </td>
                            <td>
                                <?php echo $zona ?>
                            </td>
                            <td>
                                <?php echo $envio ?>
                            </td>
                            <td>
                                <?php echo $info ?>
                            </td>
                            <td>
                                <?php include("includes/popup_redes.php") ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>    
</div>
<?php include("includes/footer.php") ?>