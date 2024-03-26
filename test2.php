<?php
    if ($count1 % 4 == 0) {	
        echo '<div class="row">';		
        while ($row = $stmt8->fetch()) {
            $id = $row['id'];
            echo '<div class="col-3">';
            echo '<a href="./select/chap.php"><img src="data:image/jpg;base64,' . base64_encode($row['anh']) . '" width="1000%"></a>';
            echo '<div class="aaa text-center"><b><a href="./select/chap.php" class="text-info">' . $row['tentruyen'] . '</a></b></div>';
            echo '</div>';
            $count1++;
        }
        echo '</div>';	
    } else {		
        while ($row = $stmt8->fetch()) {
            $id = $row['id'];
            echo '<div class="col-3">';
            echo '<a href="./select/chap.php"><img src="data:image/jpg;base64,' . base64_encode($row['anh']) . '" width="1000%"></a>';
            echo '<div class="aaa text-center"><b><a href="./select/chap.php" class="text-info">' . $row['tentruyen'] . '</a></b></div>';
            echo '</div>';
            $count1++;
        }
    }
?>