<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "taikhoan";
try {

  $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
  echo "Lỗi kết nối đến CSDL: " . $e->getMessage();
  }
  
  if (isset($_POST["btn_login"])) {  
  if (isset($_POST['email'])) {
    // Code xử lý khi phần tử "email" đã được khởi tạo
    $email2 = $_POST['email'];
  } else {
    // Code xử lý khi phần tử "email" chưa được khởi tạo
    echo "<script>alert('Email chưa được khởi tạo');</script>";
  }
  if (isset($_POST['password'])) {
    // Code xử lý khi phần tử "password" đã được khởi tạo
    $password2 = $_POST['password'];
  } else {
    // Code xử lý khi phần tử "password" chưa được khởi tạo
    echo "<script>alert('Mật khẩu chưa được khởi tạo');</script>";
  }
  $stmt3 = $pdo->prepare("SELECT * FROM username WHERE email=:email AND password=:password");
  $stmt3->bindParam(':email', $email2);
  $stmt3->bindParam(':password', $password2);
  $stmt3->execute();

  $user2 = $stmt3->fetch(PDO::FETCH_ASSOC);
  if ($user2) {
    $_SESSION['username'] = $user2['username'];
    header('Location: welcome.php');
  } else {
    // Thông báo lỗi đăng nhập
    echo "<script>alert('Email hoặc mật khẩu không đúng.');</script>";
  }
}
  

?>

<!-- <form method="post" action="#.php">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>

  <label for="password">Mật khẩu:</label>
  <input type="password" id="password" name="password"><br>

  <input type="submit" value="Đăng nhập">
</form> -->