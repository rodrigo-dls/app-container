<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="col md-4"></div>
<div class="col md-8">
    <table class="table table-boredered">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Zona</th>
                <th>Envío</th>
                <th>Detalle</th>
                <th>Redes</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // if(($_SERVER['REQUEST_METHOD'] == 'GET')){
            if(isset($_GET['telefono'])){
                // echo "Estamos probando";
                $telefono = $_GET['telefono'];
            } else {
                echo 'No hubo metodo GET';
            }
            $query = "SELECT * FROM patriotas01 WHERE telefono = $telefono";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while($row = mysqli_fetch_array($result)) { 
                    $categoria   = $row['categoria'];
                    $nombre      = $row['nombre'];
                    $apodo       = $row['apodo'];
                    $telefono    = $row['telefono'];
                    $zona        = $row['zona'];
                    $envio       = $row['envio'];
                    $info        = $row['info'];
                    $id          = $row['id'];
                ?>
                    <tr>
                        <td>
                            <?php echo $categoria ?>
                        </td>
                        <td>
                            <?php
                            if($apodo === null) {
                                echo $nombre;
                            }
                            else {
                                echo $apodo;
                            } 
                            ?>
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
                        <td>
                            <a href="edit-item_task.php?id=<?php echo $id?>"class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete-item__task.php?telefono=<?php echo $telefono ?>&id=<?php echo $id ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                        
                    </tr>

                <?php }
            }    ?>
        </tbody>
    </table>
</div>


<?php include("includes/footer.php") ?>