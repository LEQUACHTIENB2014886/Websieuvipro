<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "nienluan";
    
    try {
      // Tạo kết nối đến cơ sở dữ liệu
      $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
      // Câu lệnh SQL để lấy tên của bảng đầu tiên trong cơ sở dữ liệu
      $stmt = $pdo->prepare("SELECT table_name FROM information_schema.tables WHERE table_schema = :dbname LIMIT $idtruyen, 1");
      $stmt->bindParam(':dbname', $db_name);
      $stmt->execute();
    
      // Lấy kết quả và lưu giá trị vào biến session
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      $_SESSION['table_name'] = $result['table_name'];
    //   echo "Table name:" . $_SESSION['table_name'];
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
?>