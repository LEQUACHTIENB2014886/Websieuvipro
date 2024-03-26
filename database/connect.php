<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "nienluan";
  // Tên bảng cần lấy dữ liệu
  try {
      $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // Thực hiện các truy vấn PDO
  } catch(PDOException $e) {
      echo "Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage();
  }
