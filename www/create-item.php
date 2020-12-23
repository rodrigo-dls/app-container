
<?php include("db.php") ?>
<?php include("create-item__app.php") ?>
<?php include("includes/header.php") ?>
<?php
if(isset($_GET['prefijo'])){
    $prefijo = $_GET['prefijo'];
}

if(isset($_GET['telefono'])){
    $telefono = $_GET['telefono'];
}
?>
<div class="card card-body">
    <p>Su numero de telefono es (+<?php echo $prefijo ?>) <?php echo $telefono ?></p>
    <form action="create-item.php" method="POST">
        <div class="form-group">
            <input hidden class="form-control" name="prefijo" value="<?php echo $prefijo;?>"><br>
        </div>
        <div class="form-group">
            <input hidden class="form-control" name="telefono" value="<?php echo $telefono;?>"><br>
        </div>
        <div class="form-group">
            <label for="categoria">Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" placeholder="Ej: Venezuele">
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" class="form-control" name="categoria" placeholder="Ej: Comida">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Tu nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Tu apellido">
        </div>
        <div class="form-group">
            <label for="apodo">Apodo</label>
            <input type="text" class="form-control" name="apodo" placeholder="el pity">
        </div>
        <div class="form-group">
            <label for="zona">Zona</label>
            <input type="text" class="form-control" name="zona" placeholder="Tu zona">
        </div>
        <div class="form-group">
            <label for="envio">Envio</label>
            <input type="text" class="form-control" name="envio" placeholder="Si ó No">
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp" placeholder="(+xx) xxx xx xxxx">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" name="instagram" placeholder="Instagram">
        </div>
        <div class="form-group">
            <label for="email">e-mail</label>
            <input type="text" class="form-control" name="email" placeholder="tuDireccion@xxx.com">
        </div>
        <div class="form-group">
            <label for="website">Sitio Web</label>
            <input type="text" class="form-control" name="website" placeholder="tusitio.com">
        </div>
        <div class="form-group">
            <label for="info">Info adicional</label>
            <input type="text" class="form-control" name="info" placeholder="promo 3x2 los miércoles">
        </div>
        <button type="submit" class="btn btn-success btn-block" id="create-in-db" name="create_item">Aceptar</button>
    </form>
</div>

<?php include("includes/footer.php") ?>
