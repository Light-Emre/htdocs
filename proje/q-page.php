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


$user_id = $_SESSION['user_id'];





$sql8="SELECT * from questions WHERE q_id=$q_id2 ";
$result8 = mysqli_query($conn,$sql8);
$num_rows8 = mysqli_num_rows($result8);

echo "<a href='questions.php'>Geri Dön</a>";


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



                         // Like butonu

                         $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id2 AND type=1";
                         $result2 = mysqli_query($conn,$sql2);
                         $row2 = mysqli_fetch_assoc($result2);
                         $like = $row2['count'];
                         echo "<p>";
                         $sql3 =  "SELECT * FROM likes WHERE q_id = $q_id2 AND user_id=$user_id AND type=1";
                         $result3 = mysqli_query($conn,$sql3);
                         $num_rows3 = mysqli_num_rows($result3);
                         if($num_rows3 > 0){
                             echo "<a href='likes-delete.php?q_id=$q_id2&user_id=$user_id'>Beğen</a>($like)";
                         }else{                                
                             echo "<a href='q-like.php?q_id=$q_id2&user_id=$user_id'>Beğen</a>($like)";
                         }
                         echo " - ";
                         
                         

                         // Dislike butonu

                         $sql4 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id2 AND type=2";
                         $result4 = mysqli_query($conn,$sql4);
                         $row4 = mysqli_fetch_assoc($result4);
                         $dislike = $row4['count'];
                         
                         $sql5 =  "SELECT * FROM likes WHERE q_id = $q_id2 AND user_id=$user_id AND type=2";
                         $result5 = mysqli_query($conn,$sql5);
                         $num_rows5 = mysqli_num_rows($result5);
                         if($num_rows5 > 0){
                             echo "<a href='likes-delete.php?q_id=$q_id2&user_id=$user_id'>Beğenme</a>($dislike)";
                         }else{                                
                             echo "<a href='q-dislike.php?q_id=$q_id2&user_id=$user_id'>Beğenme</a>($dislike)";
                         }
                         echo "----------";
                         echo "</p>";









                echo '</div>' ;      
        echo '</div>';
        }
   }

?>

<?php
$sql14="SELECT * from comment WHERE que_id=$q_id2 ";
$result14 = mysqli_query($conn,$sql14);
$num_rows14 = mysqli_num_rows($result14);


$sql = "SELECT * FROM comment ";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $c_id = $row['c_id'];
        }
?>

<?php
    if($num_rows14 > 0){
        while($row14 = mysqli_fetch_assoc($result14)){
            $q_id2 = $row14['que_id'];
            
            echo '<div>';
                echo "<div class='yorumcss'>";
                    echo "<h4 class='yorumisim'>".$row14['c_username']. "</h4>";
                    echo "<small class='datecss'>".$row14['c_date']."</small>";  
                    
                    echo "<p class='pyorum'>".$row14['c_comment']."</p>";
                
                    // Like butonu

                    $sql24 = "SELECT COUNT(*) as count FROM likes WHERE c_id = $c_id AND type=1 and q_id=$q_id2";
                    $result24 = mysqli_query($conn,$sql24);
                    $row24 = mysqli_fetch_assoc($result24);
                    $like = $row24['count'];
                    
                    $sql31 =  "SELECT * FROM likes WHERE c_id = $c_id AND user_id=$user_id AND type=1 and q_id=$q_id2";
                    $result31 = mysqli_query($conn,$sql31);
                    $num_rows31 = mysqli_num_rows($result31);
                    if($num_rows31 > 0){
                        echo "<a href='c-likes-delete.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2'>Beğen</a>($like)";
                    }else{                                
                        echo "<a href='c-like.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2'>Beğen</a>($like)";
                    }
                    echo " - ";
                    
                    

                    // Dislike butonu

                    $sql4 = "SELECT COUNT(*) as count FROM likes WHERE c_id = $c_id AND type=2 and q_id=$q_id2";
                    $result4 = mysqli_query($conn,$sql4);
                    $row4 = mysqli_fetch_assoc($result4);
                    $dislike = $row4['count'];
                    
                    $sql5 =  "SELECT * FROM likes WHERE c_id = $c_id AND user_id=$user_id AND type=2 and q_id=$q_id2";
                    $result5 = mysqli_query($conn,$sql5);
                    $num_rows5 = mysqli_num_rows($result5);
                    if($num_rows5 > 0){
                        echo "<a href='c-likes-delete.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2'>Beğenme</a>($dislike)";
                    }else{                                
                        echo "<a href='c-dislike.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2'>Beğenme</a>($dislike)";
                    }
                    

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