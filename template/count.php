<?php
    if (isset($_POST['set_count'])) {
        $_SESSION['count'] = $_POST['set_count'];
    }
    if (isset($_POST['set_count2'])) {
        $_SESSION['count'] = $_POST['count'];
    }
    if (isset($_POST['default'])) {
        $_SESSION['count'] = $_POST['default'];
    }
    // Xử lý các chức năng tăng/giảm giá trị của biến count
    if (isset($_POST['plus'])) {
        if ($_SESSION['count'] < 20) {
            $_SESSION['count']++;
        }
    } elseif (isset($_POST['minus'])) {
        if ($_SESSION['count'] > 1) {
            $_SESSION['count']--;
        }
    } elseif (isset($_POST['first'])) {
        $_SESSION['count'] = 1;
    } elseif (isset($_POST['last'])) {
        $_SESSION['count'] = 20;
    }
    include '../template/scroll.php';
?>
