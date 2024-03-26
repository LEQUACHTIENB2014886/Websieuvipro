<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit;
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Chào mừng <?php echo $username; ?></title>
</head>
<body>
  <h1>Chào mừng <?php echo $username; ?> đến với trang web của chúng tôi!</h1>
  <p>Bạn đã đăng nhập thành công.</p>
</body>
</html>