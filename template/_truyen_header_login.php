<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Web Truyện Online</title>
    <link rel="stylesheet" href="../CSS/cnd.css" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="shortcut icon" type="image/png" href="Images/Favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- connect to db -->
    <?php
    include '../database/connect.php';
    ?>
</head>

<body>
    <!-- header -->
    <header class="hd">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col mypt justify-content-center text-gray-200">
                    <strong><a>WEB TRUYỆN</a></strong>
                </div>
                <div class="col mypt justify-content-center">
                </div>
                <div class="col-3">
                    <input type="text" style="border-radius: 3px; width: 250px" placeholder=" Tìm Truyện...">
                </div>
                <div class="col justify-content-center text-dark font-weight-bold">
                    <a href="../welcome.php" title="Trang Chủ" class="dlinh">Trang Chủ</a>
                </div>
                <div class="col justify-content-center">
                    <a href="./index.php" style="width:auto; color: bisque; font-family: 'Roboto Mono', monospace;">Tài Khoản</a>
                </div>
                <div class="col justify-content-center ">
                    <a style="width:auto; color: bisque; font-family: 'Roboto Mono', monospace;">Kho Truyện</a>
                </div>
                <div class="col justify-content-center">
                    <a href="./index.php" style="width:auto; color: bisque; font-family: 'Roboto Mono', monospace;">Đăng Xuất</a>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- main content goes here -->
    
    <!-- end main content -->

</body>

</html>