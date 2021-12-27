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
    <link rel="stylesheet" href="anasayfa2.css">
    
    <!-- CSS only -->
    
</head>
<body>
<?php

error_reporting(0);

include 'config.php';

$cate2 = $_GET['category'];


$sql = "SELECT questions.*, count(likes.q_id) as like_count from questions left join likes on questions.q_id=likes.q_id  where questions.category like '$cate2' AND likes.type<2 group by questions.q_id order by like_count DESC";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);

$sql19 = "SELECT questions.*, count(likes.q_id) as like_count from questions  left join likes on questions.q_id=likes.q_id where likes.type<2 group by questions.q_id order by like_count DESC ";
$result19 = mysqli_query($conn,$sql19);
$num_rows19 = mysqli_num_rows($result19);
$urlal=$_SERVER['REQUEST_URI'];



//ÜST MENU İÇİN YAPILAN SORGULAR DOKUNMA



session_start();
if(isset($_SESSION['username'])){

    echo "<ul class='liste'>";
        echo "<li style='margin-left:20px;'><a href='q-insert-form.php?url=$urlal'>Soru Ekle</a></li>";
        echo "<li style='margin-left:20px;'><a href='Home.php'>Tüm sorular</a></li>";
        echo "<li><a href='Home.php?category=Bilgisayar'>Bilgisayar</a></li>";
        echo "<li><a href='Home.php?category=Spor'>Spor</a></li>";
        echo "<li><a href='Home.php?category=Hobi'>Hobi</a></li>";
        echo "<li><a href='Home.php?category=Hayat'>Hayat</a></li>";
        echo "<li style='float:right; margin-right:20px;'><a href='logout.php'>Çıkış Yap</a></li>";
    echo "</ul>";
    echo '<p>Merhaba, ' . $_SESSION['username'] . '</p>';
}
else{
    echo '<p>Ana Sayfaya Ulaşmak İçin Giriş Yapınız</p>';
    echo '<p><a href="login.php">Giriş</a></p>';
}





?>

    
    



    
<?php 
if( ( $cate2 == 'Bilgisayar' ) || ( $cate2== 'Spor' ) || ($cate2 == 'Hobi' ) || ($cate2 == 'Hayat' )){
    $user_id = $_SESSION['user_id'];
    if($num_rows > 0){
        while($row = mysqli_fetch_assoc($result)){
            $q_id = $row['q_id'];
            echo '<div class="box1">';
                    echo '<a href="">';
                        echo '<div class="some">';
                            echo "<h4 id='box3'>".$row['q_username']. "</h4>";
                            echo "<p id='box2'>".$row['d_date']."</p>";  echo "</br>";
                            echo "<h3 id='baslik'>".$row['q_title']."</h3>";
                            echo "<p id='soruyer'>".$row['question']."</p>";
                            $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            $like = $row2['count'];
                            echo "<p class='begenp'>";
                            $sql3 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result3 = mysqli_query($conn,$sql3);
                            $num_rows3 = mysqli_num_rows($result3);
                            if($num_rows3 > 0){
                                echo "<a class='begen' href='likes-delete.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğen</a>($like)";
                            }else{                                
                                echo "<a class='begen' href='q-like.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğen</a>($like)";
                            }
                           
                            
                            

                            // Dislike butonu

                            $sql4 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=2";
                            $result4 = mysqli_query($conn,$sql4);
                            $row4 = mysqli_fetch_assoc($result4);
                            $dislike = $row4['count'];
                            
                            $sql5 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=2";
                            $result5 = mysqli_query($conn,$sql5);
                            $num_rows5 = mysqli_num_rows($result5);
                            if($num_rows5 > 0){
                                echo "<a class='begenme' href='likes-delete.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğenme </a>($dislike)";
                            }else{                                
                                echo "<a class='begenme' href='q-dislike.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğenme</a>($dislike)";
                            }

                            // Düzenle butonu

                            $sql8 =  "SELECT * FROM questions WHERE q_id = $q_id AND user_id=$user_id ";
                            $result8 = mysqli_query($conn,$sql8);
                            $num_rows8 = mysqli_num_rows($result8);
                            if($num_rows8 > 0){

                                echo "<a class='duzenle' href='q-update-form.php?q_id=$q_id&url=$urlal'>Düzenle</a> - ";
                            }else{}

                            // Sil butonu

                            $sql9 =  "SELECT * FROM questions WHERE q_id = $q_id AND user_id=$user_id";
                            $result9 = mysqli_query($conn,$sql9);
                            $num_rows9 = mysqli_num_rows($result9);
                            
                            if($num_rows9 > 0){


                                echo "<a class='sil' href='q-delete-form.php?q_id=$q_id&url=$urlal'>Sil</a> - ";
                            }else{}
                            
                            //Yanıtla Butonu
                            $sql7="SELECT q_id from questions WHERE q_id=$q_id ";
                            $result7 = mysqli_query($conn,$sql7);
                            $num_rows7 = mysqli_num_rows($result7);
                            if($num_rows7 > 0){
                                echo "<a class='yanıtla' href='q-page.php?q_id=$q_id&user_id=$user_id'>Yanıtla</a>";
                            }

                          


                            echo "</p>";
                            

                            

                            
                        echo '</div>';
                    echo '</a>';
            echo '</div>';
            
            
         }
    }


}else{
    $user_id = $_SESSION['user_id'];
    if($num_rows19 > 0){
        while($row19 = mysqli_fetch_assoc($result19)){
            $q_id = $row19['q_id'];
            echo '<div class="box1">';
                    echo '<a href="">';
                        echo '<div class="some">';
                            echo "<h4 id='box3'>".$row19['q_username']. "</h4>";
                            echo "<small id='box2'>".$row19['d_date']."</small>";  echo "</br>";
                            echo "<h3 id='baslik'>".$row19['q_title']."</h3>";
                            echo "<p id='soruyer'>".$row19['question']."</p>";

                            $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                            $result2 = mysqli_query($conn,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            $like = $row2['count'];
                            echo "<p class='begenp'>";
                            $sql3 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result3 = mysqli_query($conn,$sql3);
                            $num_rows3 = mysqli_num_rows($result3);
                            if($num_rows3 > 0){
                                echo "<a class='begen' href='likes-delete.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğen($like)</a>";
                            }else{                                
                                echo "<a class='begen' href='q-like.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğen($like)</a>";
                            }
                            
                            
                            
                            

                            // Dislike butonu

                            $sql4 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=2";
                            $result4 = mysqli_query($conn,$sql4);
                            $row4 = mysqli_fetch_assoc($result4);
                            $dislike = $row4['count'];
                            
                            $sql5 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=2";
                            $result5 = mysqli_query($conn,$sql5);
                            $num_rows5 = mysqli_num_rows($result5);
                            if($num_rows5 > 0){
                                echo "<a class='begenme'href='likes-delete.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğenme($dislike)</a>";
                            }else{                                
                                echo "<a class='begenme' href='q-dislike.php?q_id=$q_id&user_id=$user_id&url=$urlal'>Beğenme($dislike)</a>";
                            }
                            
                            // Düzenle butonu

                            $sql8 =  "SELECT * FROM questions WHERE q_id = $q_id AND user_id=$user_id ";
                            $result8 = mysqli_query($conn,$sql8);
                            $num_rows8 = mysqli_num_rows($result8);
                            if($num_rows8 > 0){

                                echo "<a class='duzenle' href='q-update-form.php?q_id=$q_id&url=$urlal'>Düzenle</a>"  ;
                            }else{}

                            // Sil butonu

                            $sql9 =  "SELECT * FROM questions WHERE q_id = $q_id AND user_id=$user_id";
                            $result9 = mysqli_query($conn,$sql9);
                            $num_rows9 = mysqli_num_rows($result9);
                            
                            if($num_rows9 > 0){


                                echo " <a class='sil' href='q-delete-form.php?q_id=$q_id&url=$urlal'>Sil</a>";
                            }else{}
                            
                            //Yanıtla Butonu

                            $sql47 = "SELECT COUNT(*) as count FROM comment WHERE que_id = $q_id ;";
                            $result47 = mysqli_query($conn,$sql47);
                            $row47 = mysqli_fetch_assoc($result47);
                            $yanıt_say = $row47['count'];

                            $sql7="SELECT q_id from questions WHERE q_id=$q_id ";
                            $result7 = mysqli_query($conn,$sql7);
                            $num_rows7 = mysqli_num_rows($result7);
                            if($num_rows7 > 0){
                                echo "<a href='q-page.php?q_id=$q_id&user_id=$user_id'>Yanıtla</a>($yanıt_say)";
                            }

        


                            echo "</p>";
                            

                            

                            
                        echo '</div>';
                    echo '</a>';
            
            echo '</div>';
            
         }
    }
}


?>