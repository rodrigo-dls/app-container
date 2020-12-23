<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'compatriota',
    'cH8lM2Bd9Pe^tvKa',
    'patriotas_crud'
);

mysqli_set_charset($conn, "utf8");

// if (isset($conn)) {
//     echo 'DB is connected';
// }

?>