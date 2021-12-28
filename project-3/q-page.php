<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="soru2.css">
    <link rel="stylesheet" href="Anasayfa2.css">
</head>
<body>

<?php
include "session-control.php";
include "config.php";

$q_id2 = $_GET['q_id'];
$user_id = $_SESSION['user_id'];
$usern=$_SESSION['username'];

$sql8="SELECT * from questions WHERE q_id=$q_id2 ";
$result8 = mysqli_query($conn,$sql8);
$num_rows8 = mysqli_num_rows($result8);

$sql58 = "SELECT comment.*, count(c_likes.q_id) as like_count from comment left join c_likes on comment.c_id=c_likes.c_id  where c_likes.type<2 and q_id = $q_id2 group by comment.c_id order by like_count DESC ";
$result58 = mysqli_query($conn,$sql58);
$num_rows58 = mysqli_num_rows($result58);

$urlal=$_SERVER['REQUEST_URI'];

session_start();
if(isset($_SESSION['username'])){

    echo "<ul class='liste'>";
        echo "<li style='margin-left:20px;'><a href='q-insert-form.php?url=$urlal'>Soru Ekle</a></li>";
        echo "<li style='margin-left:20px;'><a href='Home.php'>Tüm sorular</a></li>";
        echo "<li><a href='Home.php?category=Teknoloji'>Teknoloji</a></li>";
        echo "<li><a href='Home.php?category=Ev/Yaşam'>Ev/Yaşam</a></li>";
        echo "<li><a href='Home.php?category=Spor'>Spor</a></li>";
        echo "<li><a href='Home.php?category=Sağlık'>Sağlık</a></li>";
        echo "<li style='float:right; margin-right:20px;'><a href='logout.php'>Çıkış Yap</a></li>";
    echo "</ul>";
  
}
else{
    echo '<p>Ana Sayfaya Ulaşmak İçin Giriş Yapınız</p>';
    echo '<p><a href="login.php">Giriş</a></p>';
}



?>



<?php
   if($num_rows8 > 0){
    while($row7 = mysqli_fetch_assoc($result8)){
        echo '<div class="boxpage">';
                    echo '<div class="somepage">';
                    
                        echo "<h4 id='box3'>".$row7['q_username']. "</h4>";
                        echo "<small id='box2'>".$row7['d_date']."</small>"; 
                        echo "<h3 class='paraf'>".$row7['q_title']."</h3>";
                        echo "<p class='paraf'>".$row7['question']."</p>";
                         // Like butonu
                         echo "<hr class='cizgipage'>";

                         $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id2 AND type=1  ";
                         $result2 = mysqli_query($conn,$sql2);
                         $row2 = mysqli_fetch_assoc($result2);
                         $like = $row2['count'];
                        
                         $sql3 =  "SELECT * FROM likes WHERE q_id = $q_id2 AND user_id=$user_id AND type=1";
                         $result3 = mysqli_query($conn,$sql3);
                         $num_rows3 = mysqli_num_rows($result3);
                         if($num_rows3 > 0){
                             echo "<p class='begen2'>";
                             echo "<a class='link' href='likes-delete.php?q_id=$q_id2&user_id=$user_id&url=$urlal'>Beğen($like)</a>";
                             echo "</p>";
                         }else{  
                             echo "<p class='begen2'>";                              
                             echo "<a class='link' href='q-like.php?q_id=$q_id2&user_id=$user_id&url=$urlal'>Beğen($like)</a>";
                            echo "</p>";
                         }  
                      
                         
                         

                         // Dislike butonu

                         $sql4 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id2 AND type=2  ";
                         $result4 = mysqli_query($conn,$sql4);
                         $row4 = mysqli_fetch_assoc($result4);
                         $dislike = $row4['count'];
                         
                         $sql5 =  "SELECT * FROM likes WHERE q_id = $q_id2 AND user_id=$user_id AND type=2";
                         $result5 = mysqli_query($conn,$sql5);
                         $num_rows5 = mysqli_num_rows($result5);
                         if($num_rows5 > 0){
                             echo "<p class='begenme2'>";
                             echo "<a class='link' href='likes-delete.php?q_id=$q_id2&user_id=$user_id&url=$urlal'>Beğenme($dislike)</a>";
                             echo "</p>";
                         }else{     
                             echo "<p class='begenme2'>";                           
                             echo "<a class='link' href='q-dislike.php?q_id=$q_id2&user_id=$user_id&url=$urlal'>Beğenme($dislike)</a>";
                             echo "</p>";
                         }
                         
                        

                         // Düzenle butonu

                         $sql61 =  "SELECT * FROM questions WHERE q_id = $q_id2 AND user_id=$user_id ";
                         $result61 = mysqli_query($conn,$sql61);
                         $num_rows61 = mysqli_num_rows($result61);
                         if($num_rows61 > 0){
                             echo "<p class='duzenle2'>";
                             echo "<a class='link' href='q-update-form.php?q_id=$q_id2&url=$urlal '>Düzenle</a> ";
                             echo "</p>";
                         }else{}

                         // Sil butonu

                         $sql62 =  "SELECT * FROM questions WHERE q_id = $q_id2 AND user_id=$user_id";
                         $result62 = mysqli_query($conn,$sql62);
                         $num_rows62 = mysqli_num_rows($result62);

                         if($num_rows61 > 0){
                             echo "<p class='sil2'>";
                             echo "<a class='link' href='q-delete-form.php?q_id=$q_id2&url=$urlal'>Sil</a>  ";
                             echo "</p>";
                         }else{}

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
    if($num_rows58 > 0){
        while($row58 = mysqli_fetch_assoc($result58)){
            $q_id2 = $row58['que_id'];
            $c_id = $row58['c_id'];
            
            echo "<div class='boxcom'>";
                echo "<div class='somecom'>";
                    echo "<h4 class='yorumisim'>".$row58['c_username']. "</h4>";
                    echo "<small class='datecss'>".$row58['c_date']."</small>";
                    echo "<p class='paraf1'>".$row58['c_comment']."</p>";
                    // Like butonu
                    echo "<hr class='cizgicomment'>";
                    $sql24 = "SELECT COUNT(*) as count FROM c_likes WHERE c_id = $c_id AND type=1 and q_id=$q_id2";
                    $result24 = mysqli_query($conn,$sql24);
                    $row24 = mysqli_fetch_assoc($result24);
                    $like = $row24['count'];
                    
                    $sql31 =  "SELECT * FROM c_likes WHERE c_id = $c_id AND user_id=$user_id AND type=1 and q_id=$q_id2";
                    $result31 = mysqli_query($conn,$sql31);
                    $num_rows31 = mysqli_num_rows($result31);
                    if($num_rows31 > 0){
                        echo "<p class='begen3'>";
                        echo "<a class='link' href='c-likes-delete.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2&url=$urlal'>Beğen($like)</a>";
                        echo "</p>";
                    }else{      
                        echo "<p class='begen3'>";                          
                        echo "<a class='link'href='c-like.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2&url=$urlal'>Beğen($like)</a>";
                        echo "</p>";
                    }
                   
                    
                    

                    // Dislike butonu

                    $sql4 = "SELECT COUNT(*) as count FROM c_likes WHERE c_id = $c_id AND type=2 and q_id=$q_id2";
                    $result4 = mysqli_query($conn,$sql4);
                    $row4 = mysqli_fetch_assoc($result4);
                    $dislike = $row4['count'];
                    
                    $sql5 =  "SELECT * FROM c_likes WHERE c_id = $c_id AND user_id=$user_id AND type=2 and q_id=$q_id2";
                    $result5 = mysqli_query($conn,$sql5);
                    $num_rows5 = mysqli_num_rows($result5);
                    if($num_rows5 > 0){
                        echo "<p class='begenme3'>"; 
                        echo "<a class='link' href='c-likes-delete.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2&url=$urlal'>Beğenme($dislike)</a>";
                        echo "</p>";
                    }else{      
                        echo "<p class='begenme3'>";                           
                        echo "<a class='link' href='c-dislike.php?c_id=$c_id&user_id=$user_id&q_id=$q_id2&url=$urlal'>Beğenme($dislike)</a>";
                        echo "</p>";
                    }
                    

                echo '</div>';
            echo '</div>';
          
        }
    }



?>


<br>

<?php

echo "<form action='c-insert.php?q_id=$q_id2' method='post'>";
    echo   '<div class="someyanıt">';
        echo "<br>";
        echo '<div>';
        echo "<p style='font-weight=bolder;'>-$usern, Buradan Yorum Ekleyebilirsin !</p>";
        echo "<textarea required='required' class='yorumkutu' name='answer' id='' cols='100' rows='5'></textarea>";
        echo '</div>';
        echo '<div>';
        echo '<br>';
        echo "<input class='yanıtbuton' type='submit' value='Yorum Yap' >";
        echo '</div>';
        echo "<br>";
    echo '</div>';
echo "</form>";

?>



    
</body>
</html>