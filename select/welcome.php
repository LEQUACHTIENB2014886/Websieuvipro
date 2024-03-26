<?php
include '../template/ss.php';
include '../template/_truyen_header_login.php'; 
include '../database/connecttruyen.php'; 
$sql = "SELECT * FROM truyen";
$stmt8 = $connn123->query($sql);
$row = $stmt8->fetch();
if (isset($_POST['linktruyen'])) {
    $_SESSION['linktruyen'] = $_POST['linktruyen'];
  }
$linktruyen = $_SESSION['linktruyen'];
$sql = "SELECT * FROM truyen WHERE linktruyen = '$linktruyen'";
$stmt12 = $connn123->query($sql);
$row = $stmt12->fetch(PDO::FETCH_ASSOC);

?>

<html>
<div class="container">   
    <br><br>
    <div class="row">
        <div class="col-2"></div>   
        <div class="NTKH col-8 text-center" style="color:blueviolet">
            <?php echo "<h2>" . $row['tentruyen'] . "</h2>"; ?>        
            <br><br>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
        <div class="row">
                <div class="col-4"><?php echo '<img src="data:image/jpg;base64,' . base64_encode($row['anh']) . '" width="1000%">'; ?></div>
                <div class="col-2">
                <div class="col">
                    <div class="col text-dark">
                        <br>
                            <a class="btn btn-primary mrb5">
                                <form method="post" action="../truyen/welcome.php">
                                    <button type="submit" name="set_count" value="1">Đọc từ đầu</button>
                                </form>
                            </a>
                        <br>
                    </div> 
                    </div>
                    <br><br><br>
                    <div class="col">
                        <div class="col text-dark">
                            <h3>Thể Loại</h3>
                        </div>
                    </div>
                    <br><br>
                    <div class="col">
                        <div class="col text-dark">
                            <h3>Tác Giả</h3>
                        </div>
                    </div>
                    <br><br>
                    <div class="col">
                        <div class="col text-dark">
                            <h3>Tình trạng</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col text-success text-center">
                            <br>
                            <a class="btn btn-primary mrb5">
                                <form method="post" action="../truyen/welcome.php">
                                    <button type="submit" name="set_count" value="20">Đọc mới nhất</button>
                                </form>
                            </a>
                            <br>
                    </div>
                    <br><br><br>
                    <div class="col">
                        <div class="col text-success">
                            <?php  echo "<h3>" . $row['theloai'] . "</h3>";?>
                        </div>
                    </div>
                    <br><br>
                    <div class="col">
                        <div class="col text-success">
                            <h3>Đang cập nhật</h3>
                        </div>
                    </div>
                    <br><br>
                    <div class="col">
                        <div class="col text-success">
                            <h3>Đang tiến hành</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="col text-success" style="text-align:center">
                            <br> 
                            <a class="btn btn-primary mrb5">
                                <button id="myButton">Chọn Chap</button>
                            </a>
                            <form method="post" action="../truyen/welcome.php" style="display:none;" id="myForm">
                                <label for="count"></label>
                                <br>
                                    <select name="count" id="count">
                                        <?php
                                        for ($i = 1; $i <= 20; $i++) {
                                            echo '<option value="' . $i . '"';
                                            if (isset($_POST['count']) && $_POST['count'] == $i) {
                                            echo ' selected';
                                            }
                                            echo '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                <button type="submit" name="set_count2"><a class="btn btn-primary mrb5">Xem Chap</a></button>
                            </form>

                            <script>
                            var myButton = document.getElementById("myButton");
                            var myForm = document.getElementById("myForm");

                            myButton.addEventListener("mouseover", function() {
                                myForm.style.display = "block";
                            });
                            </script>
                            <br><br>
                            <div>
                           
                            </div>   
                            <br>
                        </div>
                    </div>
                </div>

            </div>
            <Br><br>
            <div class="row">
                <div class="col text-secondary" style="text-align:justify"><?php echo "<strong><a>" . $row['noidung'] . "</a></strong>"; ?>  </div>
            </div>
            <br><br>
        </div>
        <div class="col-2"></div>
    </div>
    <br>
</div>
<style>
    .NTKH {
        font-family: "Roboto Mono", monospace;
    }
</style>

</html>

<?php
//include footer
include '../template/_footer-truyen.php';
?>
