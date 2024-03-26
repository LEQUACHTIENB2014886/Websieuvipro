<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "taikhoan";

// Tên bảng cần lấy dữ liệu
try {
    $pdo = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Thực hiện các truy vấn PDO
} catch(PDOException $e) {
    echo "Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage();
}

if (isset($_POST["btn_register"])) {
    // Lấy thông tin từ các form bằng phương thức POST
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];
    // Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
    if ($username == "" || $password == "" || $confirm_password == "" || $email == "") {
        echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin');</script>";
    } elseif ($password != $confirm_password) {
        echo "<script>alert('Mật khẩu và xác nhận mật khẩu không khớp');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Địa chỉ email không hợp lệ');</script>";
    } else {
        // Kiểm tra tài khoản hoặc email đã tồn tại chưa
        $sql = "SELECT * FROM username WHERE username=:username OR email=:email";
        $stmt1 = $pdo->prepare($sql);
        $stmt1->bindParam(':username', $username);
        $stmt1->bindParam(':email', $email);
        $stmt1->execute();
        $result = $stmt1->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if ($result['username'] == $username) {
                echo "<script>alert('Tài khoản đã tồn tại');</script>";
            } elseif ($result['email'] == $email) {
                echo "<script>alert('Email đã được sử dụng');</script>";
            }
        } else {
            // Thực hiện việc lưu trữ dữ liệu vào CSDL
            $sql = "INSERT INTO username(username, password, email) VALUES (:username, :password, :email)";
            $stmt1 = $pdo->prepare($sql);
            $stmt1->bindParam(':username', $username);
            $stmt1->bindParam(':password', $password);
            $stmt1->bindParam(':email', $email);
            $stmt1->execute();
            echo "<script>alert('Chúc mừng bạn đã đăng ký thành công');</script>";
        }
    }
}
?>