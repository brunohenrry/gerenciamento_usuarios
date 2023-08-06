<?php
    $db_host = 'seu_host';
    $db_user = 'seu_usuario';
    $db_password = 'sua_senha';
    $db_name = 'seu_banco_de_dados';

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
    }
?>
    