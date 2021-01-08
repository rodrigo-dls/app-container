<?php include("db.php") ?>
<?php include("edit-item__app.php") ?>


<?php
#   Levanta los campos de la fila para mostrarlos en el form

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM $table_primary WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        // echo "you can edit";
        $row = mysqli_fetch_array($result);
        $categoria   = $row['categoria'];
        $codPais     = $row['codPais'];
        $telefono    = $row['telefono'];
        $nombre      = $row['nombre'];
        $apellido    = $row['apellido'];
        $apodo       = $row['apodo'];
        $zona        = $row['zona'];
        $envio       = $row['envio'];
        $whatsapp    = $row['whatsapp'];
        $instagram   = $row['instagram'];
        $email       = $row['email'];
        $website     = $row['website'];
        $info        = $row['info'];
    }
}
?>

<?php 
#   Recoge los datos enviados del form y actualiza la BD

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['update'])) {
        // echo 'actualizando';
        // $id;
        $categoria   = $_POST['categoria'];
        // $codPais;
        // $telefono;
        $nombre      = $_POST['nombre'];
        $apellido    = $_POST['apellido'];
        $apodo       = $_POST['apodo'];
        $zona        = $_POST['zona'];
        $envio       = $_POST['envio'];
        $whatsapp    = $_POST['whatsapp'];
        $instagram   = $_POST['instagram'];
        $email       = $_POST['email'];
        $website     = $_POST['website'];
        $info        = $_POST['info'];

        $query = "UPDATE patriotas01
            SET
                categoria        = '$categoria',
                codPais          = '$codPais',
                telefono         = '$telefono',
                nombre           = '$nombre',
                apellido         = '$apellido',
                apodo            = '$apodo',
                zona             = '$zona',
                envio            = '$envio',
                whatsapp         = '$whatsapp',
                instagram        = '$instagram',
                email            = '$email',
                website          = '$website',
                info             = '$info'
            WHERE 
                id  = '$id'";
        
        // $query = "UPDATE `patriotas01` SET `categoria` = 'Peposo', `codPais` = '69', `telefono` = '6783857', `nombre` = 'Cos', `apellido` = 'Grueso', `apodo` = 'En', `zona` = 'Tu', `envio` = '0', `whatsapp` = '48392', `instagram` = 'entuculomipepino', `email` = 'entu@pepino.com', `website` = 'mipepi.no', `info` = 'PEPENO' WHERE `patriotas01`.`id` = '2";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<script>console.log('Entrada fallida')</script>";
            echo mysqli_error($conn) . "<br>";
            printf("error: %s\n", mysqli_error($conn));
        } else {
            echo "<script>console.log('Entrada exitosa')</script>";
        }

        // header("Location: index.php");
    
    }
?>


<?php include("includes/header.php") ?>

<div class="card card-body">
    <!-- <p>Su numero de telefono es (+xx) xxx xx xxxx</p> -->
    <form action="edit-item_task.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" class="form-control" name="categoria" placeholder="Ej: Comida" value=<?php echo $categoria; ?>>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Tu nombre" value=<?php echo $nombre; ?>>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Tu apellido" value=<?php echo $apellido; ?>>
        </div>
        <div class="form-group">
            <label for="apodo">Apodo</label>
            <input type="text" class="form-control" name="apodo" placeholder="el pity"  value=<?php echo $apodo; ?>>
        </div>
        <div class="form-group">
            <label for="zona">Zona</label>
            <input type="text" class="form-control" name="zona" placeholder="Tu zona"  value=<?php echo $zona; ?>>
        </div>
        <div class="form-group">
            <label for="envio">Envio</label>
            <input type="text" class="form-control" name="envio" placeholder="Si ó No"  value=<?php echo $envio; ?>>
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp" placeholder="(+xx) xxx xx xxxx"  value=<?php echo $whatsapp; ?>>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" name="instagram" name="nombre"placeholder="Instagram"  value=<?php echo $instagram; ?>>
        </div>
        <div class="form-group">
            <label for="email">e-mail</label>
            <input type="text" class="form-control" name="email" placeholder="tuDireccion@xxx.com"  value=<?php echo $email; ?>>
        </div>
        <div class="form-group">
            <label for="website">Sitio Web</label>
            <input type="text" class="form-control" name="website" placeholder="tusitio.com" value=<?php echo $website; ?>>
        </div>
        <div class="form-group">
            <label for="info">Info adicional</label>
            <input type="text" class="form-control" name="info" placeholder="promo 3x2 los miércoles" value=<?php echo $info; ?>>
        </div>
        <button type="submit" class="btn btn-success btn-block" id="update-in-db" name="update">Actualizar</button>
    </form>
</div>


<?php include("includes/footer.php") ?>