<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorular</title>
    <link rel="stylesheet" href="sorular.css">
</head>
<body>
<?php
include 'config.php';

$sql = "SELECT * FROM questions ORDER BY q_id DESC";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);

?>
    <p>
        <a href="q-insert-form.php">Soru Ekle</a>
    </p>
    <p>
        <a href="logout.php">Çıkış Yap</a>
    </p>
    <hr>
<?php 
    $user_id = $_SESSION['user_id'];
    if($num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $q_id = $row['q_id'];
            echo '<div class="box1">';
                    echo '<a href="">';
                        echo '<div class="some">';
                            echo "<h4 id='box3'>".$row['q_username']. "</h4>";
                            echo "<small id='box2'>".$row['q_date']."</small>";  echo "</br>";
                            echo "<h3 id='baslik'>".$row['q_title']."</h3>";
                            echo "<p id='soruyer'>".$row['question']."</p>";


                            // Like butonu

                            $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            $like = $row2['count'];
                            echo "<p>";
                            $sql3 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result3 = mysqli_query($conn,$sql3);
                            $num_rows3 = mysqli_num_rows($result3);
                            if($num_rows3 > 0){
                                echo "<a href='likes-delete.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like)";
                            }else{                                
                                echo "<a href='q-like.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like)";
                            }
                            echo " - ";
                            
                            

                            // Dislike butonu

                            $sql4 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=2";
                            $result4 = mysqli_query($conn,$sql4);
                            $row4 = mysqli_fetch_assoc($result4);
                            $dislike = $row4['count'];
                            
                            $sql5 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=2";
                            $result5 = mysqli_query($conn,$sql5);
                            $num_rows5 = mysqli_num_rows($result5);
                            if($num_rows5 > 0){
                                echo "<a href='likes-delete.php?q_id=$q_id&user_id=$user_id'>Beğenme</a>($dislike)";
                            }else{                                
                                echo "<a href='q-dislike.php?q_id=$q_id&user_id=$user_id'>Beğenme</a>($dislike)";
                            }
                            echo "----------";
                            echo "</p>";
                            
                            // Düzenle butonu

                            $sql8 =  "SELECT * FROM questions WHERE q_id = $q_id AND user_id=$user_id ";
                            $result8 = mysqli_query($conn,$sql8);
                            $num_rows8 = mysqli_num_rows($result8);
                            if($num_rows8 > 0){

                                echo '<a href="q-update-form.php?q_id=' . $row['q_id'] . '">Düzenle</a> - ';
                            }else{}

                            // Sil butonu

                            $sql9 =  "SELECT * FROM questions WHERE q_id = $q_id AND user_id=$user_id";
                            $result9 = mysqli_query($conn,$sql9);
                            $num_rows9 = mysqli_num_rows($result9);
                            
                            if($num_rows9 > 0){


                                echo '<a href="q-delete-form.php?q_id=' . $row['q_id'] . '">Sil</a>';
                            }else{}


                            

                            
                        echo '</div>';
                    echo '</a>';
            
            echo '</div>';
            
         }
    }


?>