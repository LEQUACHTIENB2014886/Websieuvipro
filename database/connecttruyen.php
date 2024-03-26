<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "select";

try {
    $connn123 = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
    $connn123->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage();
}

?>