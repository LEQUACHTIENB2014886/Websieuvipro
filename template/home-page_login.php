<?php 

include './database/connecttruyen.php';
$count1 = 0;
$sql = "SELECT * FROM truyen";
$stmt8 = $connn123->query($sql);
?>
<form id="myform" method="post" action="./select/welcome.php">
  <input type="hidden" name="linktruyen" id="linktruyen" value="">
</form>
<div class="bgbd">
	<div class="container-sm mt-2 mb-2">
		<div class="container-fluid mt-2">
			<!-- Carousel -->
			<div id="demo" class="carousel slide" data-bs-ride="carousel">

				<!-- Indicators/dots -->
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
					<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
					<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
				</div>

				<!-- The slideshow/carousel -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="./Images/1.jpg" alt="1" class="d-block" style="width:1100%">
					</div>
					<div class="carousel-item">
						<img src="./Images/2.jpg" alt="2" class="d-block" style="width:1100%">
					</div>
					<div class="carousel-item">
						<img src="./Images/3.jpg" alt="3" class="d-block" style="width:1100%">
					</div>
				</div>

				<!-- Left and right controls/icons -->
				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
				</button>
			</div>
		</div>
		<hr>
		<div class="container-sm mt-2 mb-2">
			<div class="row">
				<div class="col-sm-9 mt-1">
				<?php
					if ($count1 % 4 == 0) {	
						echo '<div class="row">';		
						while ($row = $stmt8->fetch()) {
							echo '<div class="col-3">';
							echo '<a href="./select/welcome.php" data-linktruyen="' . $row['linktruyen'] . '" class="truyen-link"><img src="data:image/jpg;base64,' . base64_encode($row['anh']) . '" width="1000%"></a>';
							echo '<div class="aaa text-center"><b><a href="./select/welcome.php" class="text-info truyen-link" data-linktruyen="' . $row['linktruyen'] . '">' . $row['tentruyen'] . '</a></b></div>';
							echo '</div>';
							$count1++;
						}
						echo '</div>';	
					} else {		
						while ($row = $stmt8->fetch()) {
							echo '<div class="col-3">';
							echo '<a href="./select/welcome.php" data-linktruyen="' . $row['linktruyen'] . '" class="truyen-link"><img src="data:image/jpg;base64,' . base64_encode($row['anh']) . '" width="1000%"></a>';
							echo '<div class="aaa text-center"><b><a href="./select/welcome.php" class="text-info truyen-link" data-linktruyen="' . $row['linktruyen'] . '">' . $row['tentruyen'] . '</a></b></div>';
							echo '</div>';
							$count1++;	
						}
					}
					?>
				</div>
				<div class="col-sm-3 mt-1">
					<hr>
					<div class="text-center text-success">
						<h2 style="font-family: 'Itim', cursive;">Truyện Hot</h2>
					</div>
					<hr>
					<hr>
					<div><a href="./index.php" class="gg">Độ Đệ Ta là Đại Phản Phái</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Quý Tộc Lười Biếng</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Thăng Cấp Vô Hạn</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Cuộc Chiến Trong Tòa Tháp</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Kĩ Sư Bá Nhất Thế Giới</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Phép Thuật Của Người Trùng Sinh</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Kiếm Sĩ Bất Bại</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Cốt Binh Trở Lại</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Kẻ Phản Diện</a>
					</div>
					<hr>
					<div class="text-muted">
						<a href="./index.php" class="gg">Hóa Thân Thành Mèo</a>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var links = document.getElementsByClassName("truyen-link"); // Lấy tất cả các thẻ <a> có lớp CSS là "truyen-link"
	for (var i = 0; i < links.length; i++) {
		links[i].addEventListener("click", function(event) {
			var linktruyen = this.getAttribute("data-linktruyen");
			document.getElementById("linktruyen").value = linktruyen;
			document.getElementById("myform").submit();
			event.preventDefault();
		});
	}
</script>
<?php
	// $connn123 = null;
?>