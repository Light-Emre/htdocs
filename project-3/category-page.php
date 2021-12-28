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
    <link rel="stylesheet" href="soru.css">
</head>
<body>
<?php




include 'config.php';


$sql21 = "SELECT * FROM questions WHERE category='Bilgisayar' ORDER BY q_id DESC ";
$result21 = mysqli_query($conn,$sql21);
$num_rows21 = mysqli_num_rows($result21);
?>

<?php

$user_id = $_SESSION['user_id'];
    if($num_rows21 > 0){
        while($row21 = mysqli_fetch_assoc($result21)){
            $q_id = $row21['q_id'];
            echo '<div class="box1">';
                    echo '<a href="">';
                        echo '<div class="some">';
                            echo "<h4 id='box3'>".$row21['q_username']. "</h4>";
                            echo "<small id='box2'>".$row21['d_date']."</small>";  echo "</br>";
                            echo "<h3 id='baslik'>".$row21['q_title']."</h3>";
                            echo "<p id='soruyer'>".$row21['question']."</p>";
                            $sql22 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                            $result22 = mysqli_query($conn,$sql22);
                            $row22 = mysqli_fetch_assoc($result22);
                            $like22 = $row22['count'];
                            echo "<p>";
                            $sql32 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result32 = mysqli_query($conn,$sql32);
                            $num_rows32 = mysqli_num_rows($result32);
                            if($num_rows32 > 0){
                                echo "<a href='likes-delete.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like22)";
                            }else{                                
                                echo "<a href='q-like.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like22)";
                            }
                            echo " - ";
                            
                            

                            // Dislike butonu

                            $sql42 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=2";
                            $result42 = mysqli_query($conn,$sql42);
                            $row42 = mysqli_fetch_assoc($result42);
                            $dislike = $row42['count'];
                            
                            $sql52 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=2";
                            $result52 = mysqli_query($conn,$sql52);
                            $num_rows52 = mysqli_num_rows($result52);
                            if($num_rows52 > 0){
                                echo "<a href='likes-delete.php?q_id=$q_id&user_id=$user_id'>Beğenme</a>($dislike)";
                            }else{                                
                                echo "<a href='q-dislike.php?q_id=$q_id&user_id=$user_id'>Beğenme</a>($dislike)";
                            }
                            
                            //Yanıtla Butonu
                            $sql72="SELECT q_id from questions WHERE q_id=$q_id ";
                            $result72 = mysqli_query($conn,$sql72);
                            $num_rows72 = mysqli_num_rows($result72);
                            if($num_rows72 > 0){
                                echo "<a href='q-page.php?q_id=$q_id&user_id=$user_id'>Yanıtla</a>";
                            }

                          


                            echo "</p>";
                            

                            

                            
                        echo '</div>';
                    echo '</a>';
            
            echo '</div>';
            
         }
    }


?>