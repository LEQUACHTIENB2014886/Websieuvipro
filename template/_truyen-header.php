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
	<?php
	include '../admin/register.php';
	?>
	<?php
	include '../admin/login.php';
	?>

<body>
	<!-- header -->
	<header class="hd">
		<div class="container">
			<div class="row">
				<div class="col-2"></div>
				<div class="col mypt justify-content-center text-gray-200">
					<strong><a>WEB TRUYỆN</a></strong>
				</div>
				<div class="col-2 mypt justify-content-center">
				</div>
				<div class="col-3">
					<input type="text" style="border-radius: 3px; width: 250px" placeholder=" Tìm Truyện...">
				</div>
				<div class="col justify-content-center text-dark font-weight-bold">
					<a href="../index.php" title="Trang Chủ" class="dlinh">Trang Chủ</a>
				</div>
				<div class="col justify-content-center">
					<a onclick="document.getElementById('id01').style.display='block'" style="width:auto; color: bisque; font-family: 'Roboto Mono', monospace;">Đăng Nhập</a>
					<div id="id01" class="modal">
						<br><br>
						<div class="signin">
							<div class="back-img border border-secondary">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="sign-in-text">
												<h4 class="active">Đăng Nhập</h4>
											</div><!--/.sign-in-text-->
											<div class="layer">
											</div><!--/.layer-->
										</div>
									</div>
									<div class="row">
										<div class="col-1"></div>

									</div>
								</div>
							</div><!--/.back-img-->
							<div class="form-section border border-secondary">
							<form action="#" method="post" class="login-form"
    							style=" margin: 0 auto; padding-right: 14px; padding-left: 14px;   border: 1px solid #ccc;  border-radius: 5px; font-family: Arial, sans-serif;">
								<div class="form-group1">
									<br>
									<label for="email">Email</label>
									<div class="input-group">
										<input type="text" id="email" name="email">
									</div>
								</div>
								<div class="form-group1">
									<label for="password">Mật Khẩu</label>
									<div class="input-group">
										<input type="password" id="password" name="password">
									</div>
								</div>
								<div class="form-group1">
									<br>
									<div class="input-group">
										<button style="background-color: #4CAF50;" type="submit" name="btn_login" value="Dang nhap">Đăng Nhập</button>
									</div>
									<br>
								</div>
							</form>
							</div><!--/.form-section-->
						</div><!--/.signin-->
					</div>
				</div>
				<div class="col justify-content-center ">
					<a onclick="document.getElementById('id02').style.display='block'" style="width:auto; color: bisque; font-family: 'Roboto Mono', monospace;">Đăng Ký</a>
					<div id="id02" class="modal">
						<br><br>
						<div class="signup">
							<div class="back-img border border-secondary">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="sign-in-text">
												<h4 class="active">Đăng Ký</h4>
											</div><!--/.sign-in-text-->
											<div class="layer">
											</div><!--/.layer-->
										</div>
									</div>
									<div class="row">
										<div class="col-1"></div>

									</div>
								</div>
							</div><!--/.back-img-->
							<div class="form-section border border-secondary">
							<form action="#" method="post" class="registration-form"
    							style=" margin: 0 auto; padding-right: 14px; padding-left: 14px;   border: 1px solid #ccc;  border-radius: 5px; font-family: Arial, sans-serif;">
								<div class="form-group">
									<br>
									<label for="username">Tài Khoản</label>
									<div class="input-group">
										<input type="text" id="username" name="username">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<div class="input-group">
										<input type="text" id="email" name="email">
									</div>
								</div>
								<div class="form-group">
									<label for="password">Mật Khẩu</label>
									<div class="input-group">
										<input type="password" id="password" name="password">
									</div>
								</div>
								<div class="form-group">
									<label for="confirm_password">Xác nhận</label>
									<div class="input-group">
										<input type="password" id="confirm_password" name="confirm_password">
									</div>
								</div>
								<div class="form-group">
									<br>
									<div class="input-group">
										<button style="background-color: #4CAF50;" type="submit" name="btn_register" value="Dang ky">Đăng Ký</button>
									</div>
									<br>
								</div>
							</form>

					</div><!--/.form-section-->
		
							
						</div><!--/.signin-->

					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
	<script>
		// Get the modal
		var modal3 = document.getElementById('id01');
		var modal2 = document.getElementById('id02');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal3 || event.target == modal2) {
				modal3.style.display = "none";
				modal2.style.display = "none";
			}
		}
	</script>
	<script src="../JS/script.js"></script>
	
<style>
<style>

.form-group {
        margin-bottom: -0.8px;
}
.form-group1 {
        margin-bottom: 9px;
}

.input-group {
	display: flex;
	align-items: center;
	justify-content: flex-end;
}

label {
		display: block;
		margin-right: 8px; 
}

.input-group {
        display: flex;
        align-items: center;
}

input[type="text"],
input[type="password"] {
    flex: 1;
    padding: 2px 4px; 
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
}

button[type="submit"] {
    color: white;
    padding: 2px 4px; 
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
	
}

</style>
	<main>