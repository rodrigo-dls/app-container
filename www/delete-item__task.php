<?php include("db.php") ?>
<?php 

if (isset($_GET['telefono'])){
    echo $telefono = $_GET['telefono'];
}

if(isset($_GET['id'])){
    echo $id = (int)$_GET['id'];
    $query = "DELETE FROM patriotas01 WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    // if(!$result){
    //     echo 'la prueba fallo';
    // } else {
    //     echo 'la fila fue borrada exitosamente';
    // }

    header("Location: edit-item.php?telefono=" . $telefono );
}

?>