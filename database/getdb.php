<?php
include './connect.php';

$sql = "SELECT * FROM test";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        foreach ($rows as $row) {
        ?>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <img src="<?php echo $row['pic']; ?>" alt="pic">
                </div>
                <div class="col-3"></div>
            </div>
        <?php
        }
        ?>

        <!-- <img src="../im/comic1/chuong1/1.png" alt=""> -->
    </div>
</body>

</html>