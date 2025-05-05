<?php
    $server = "127.0.0.1";
    $port = 3307;
    $user = "root";
    $password = "";
    $db = "_sms";
    
    $conn = mysqli_connect($server, $user, $password, $db, $port);

    if (!$conn) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
          'status'  => 'NO_CONNECTION',
          'message' => 'Error de conexión MySQL: ' . mysqli_connect_error()
        ]);
        exit;
    }


?>