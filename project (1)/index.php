<?php
$title = 'Ana Sayfa';
?>
<html>
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

        error_reporting(0);

        include 'config.php';

            $sql2 = "SELECT * FROM questions WHERE category='Bilgisayar' ORDER BY q_id DESC ";
            $result2 = mysqli_query($conn,$sql2);
            $num_rows2 = mysqli_num_rows($result2);
            $row2 = mysqli_fetch_assoc($result2);
            $cate2 = $row2['category'];

            $sql3 = "SELECT * FROM questions WHERE category='Spor' ORDER BY q_id DESC ";
            $result3 = mysqli_query($conn,$sql3);
            $num_rows3 = mysqli_num_rows($result3);
            $row3 = mysqli_fetch_assoc($result3);
            $cate3 = $row3['category'];

            $sql4 = "SELECT * FROM questions WHERE category='Hobi' ORDER BY q_id DESC ";
            $result4 = mysqli_query($conn,$sql4);
            $num_rows4 = mysqli_num_rows($result4);
            $row4 = mysqli_fetch_assoc($result4);
            $cate4 = $row4['category'];

            $sql5 = "SELECT * FROM questions WHERE category='Hayat' ORDER BY q_id DESC ";
            $result5 = mysqli_query($conn,$sql5);
            $num_rows5 = mysqli_num_rows($result5);
            $row5 = mysqli_fetch_assoc($result5);
            $cate5 = $row5['category'];




            session_start();
            if(isset($_SESSION['username'])){
                echo '<p>Merhaba, ' . $_SESSION['username'] . '</p>';
               
                echo '<p><a href="logout.php">Çıkış Yap</a></p>';
                echo '<p><a href="questions.php">Sorular</a></p>';
                echo '<p><a href="q-insert-form.php">Soru Ekle</a></p>';
                echo "<a href='questions.php?category=$cate2'>Bilgisayar</a>";
                echo "</br>";
                echo "<a href='questions.php?category=$cate3'>Spor</a>";
                echo "</br>";
                echo "<a href='questions.php?category=$cate4'>Hobi</a>";
                echo "</br>";
                echo "<a href='questions.php?category=$cate5'>Hayat</a>";
                
                
            }
            else{
                echo '<p>Ana Sayfaya Ulaşmak İçin Giriş Yapınız</p>';
                echo '<p><a href="login.php">Giriş</a></p>';
            }
        ?>
    </body>
</html>