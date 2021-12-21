<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="soru.css">
</head>
<body>

<?php
include "session-control.php";
include "config.php";

$q_id2 = $_GET['q_id'];
$user_id2 = $_SESSION['user_id'];

$sql8="SELECT * from questions WHERE q_id=$q_id2 ";
$result8 = mysqli_query($conn,$sql8);
$num_rows8 = mysqli_num_rows($result8);

echo "<a href='questions.php'>Geri Dön</a>"

?>



<?php
   if($num_rows8 > 0){
    while($row7 = mysqli_fetch_assoc($result8)){
        echo '<div class="box">';
                    echo '<div class="some">';
                        echo "<h4 id='box3'>".$row7['q_username']. "</h4>";
                        echo "<small id='box2'>".$row7['d_date']."</small>";  echo "</br>";
                        echo "<h3 id='baslik'>".$row7['q_title']."</h3>";
                        echo "<p >".$row7['question']."</p>";
                echo '</div>' ;      
        echo '</div>';
        }
   }

?>

<?php
$sql14="SELECT * from comment WHERE que_id=$q_id2 ";
$result14 = mysqli_query($conn,$sql14);
$num_rows14 = mysqli_num_rows($result14);
?>

<?php
    if($num_rows14 > 0){
        while($row14 = mysqli_fetch_assoc($result14)){
            $q_id2 = $row14['que_id'];
            echo '<div>';
                echo "<div class='yorumcss'>";
                    echo "<h4 class='yorumisim'>".$row14['c_username']. "</h4>";
                    echo "<small class='datecss'>".$row14['c_date']."</small>";  
                    echo "</br>";
                    echo "<p class='pyorum'>".$row14['c_comment']."</p>";
                echo '</div>';
            echo '</div>';
            echo '<br>';
        }
    }



?>


<br>

<?php

echo "<form action='c-insert.php?q_id=$q_id2' method='post'>";
    echo   '<div class="some">';
        echo "<br>";
        echo '<div>';
        echo "<p>'Yanıtınız'</p>";
        echo "<textarea name='answer' id='' cols='100' rows='5'></textarea>";
        echo '</div>';
        echo '<div>';
        echo '<br>';
        echo "<input type='submit' value='Yorum Yap' >";
        echo '</div>';
        echo "<br>";
    echo '</div>';
echo "</form>";

?>



    
</body>
</html>