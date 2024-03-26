<?php 
include '../template/ss.php';
include '../template/count.php';
include '../template/_truyen_header_login.php';
include '../admin/register.php';
include '../admin/login.php';
include '../database/connect.php';
$stmt5 = $pdo->prepare("SELECT * FROM `{$_SESSION['linktruyen']}` WHERE id = ?");
$stmt5->execute(array($_SESSION['count']));
$row = $stmt5->fetch(PDO::FETCH_ASSOC);

?>

<html>
<main class="bg-dark">
    <div class="container">
    <?php
    if ($row) {
    ?>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <?php echo $row["pic"] ?>
                </div>
                <div class="col-3"></div>
            </div>
    <?php
    }
    ?>
    </div>
</main>
</html>

<style>
  .chapter-nav-container {
    position: fixed;
    top: 88px;
    left: 0;
    right: 0;
    background-color: #333;
    z-index: 999;
    display: flex;
    justify-content: center;
    /* Thêm thuộc tính canh chỉnh nút */
    align-items: flex-end;
    padding-bottom: 5px;
  }
  button {
    white-space: nowrap;
    font-size: 14px;
    padding: 5px 10px;
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 5px;
    margin-bottom: -10px;
    border: none;
    border-radius: 3px;
    background-color: #555;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #777;
  }
  .chapter-nav {
    display: flex;
    justify-content: center;
  }
  .chapter-nav::-webkit-scrollbar {
    height: 1px;
    background-color: #333;
  }
  .chapter-nav::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #666;
  }
  
</style>
<?php
include '../template/_footer-truyen.php';
?>