<?php

// session_start();

$conn = mysqli_connect(
    'compatriotas-mysql',
    'compatriota',
    'cH8lM2Bd9Pe^tvKa',
    'patriotas_crud'
);

mysqli_set_charset($conn, "utf8");

$table_primary = 'patriotas01';

// if (isset($conn)) {
//     echo 'DB is connected';
// }

?>