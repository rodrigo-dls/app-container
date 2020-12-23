<?php 

if (isset($_POST['create_item'])){
    // $id;
    $categoria   = $_POST['categoria'];
    $prefijo     = $_POST['prefijo'];
    // $prefijo     = '45';
    $telefono    = $_POST['telefono'];
    $nacionalidad= $_POST['nacionalidad'];
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

    $query = "INSERT INTO patriotas01
                            (
                            categoria, 
                            prefijo, 
                            telefono, 
                            nacionalidad, 
                            nombre, 
                            apellido, 
                            apodo, 
                            zona, 
                            envio, 
                            whatsapp, 
                            instagram, 
                            email, 
                            website, 
                            info) 
                    values  ( 
                            '$categoria',
                            '$prefijo',
                            '$telefono',
                            '$nacionalidad',
                            '$nombre',
                            '$apellido',
                            '$apodo',
                            '$zona',
                            '$envio',
                            '$whatsapp',
                            '$instagram',
                            '$email',
                            '$website',
                            '$info')
            ";

    $result = mysqli_query($conn, $query);
    $registrado = mysqli_affected_rows(($conn));

    // if (!$result) {
    //     echo "Entrada fallida <br>";
    //     printf("error: %s\n", mysqli_error($conn));
    // } else {
    //     echo "Entrada exitosa <br>";
    // }
    // echo $registrado." fila afectada.<br>";
    // if (!$result) {
    //     die("Query failed");
    //     echo '<script>console.log("Welcome to GeeksforGeeks!"); </script>'; 
    // }

    // echo 'saved';

    // $_SESSION['message'] = 'Task Saved Succesfully';
    // $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>