<?php
$title = 'Ana Sayfa';
?>
<html>
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="anasayfa1.css">
        <!-- CSS only -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

                echo "<ul class='liste'>";
                    echo "<li style='margin-left:20px;'><a href='q-insert-form.php'>Soru Ekle</a></li>";
                    echo "<li style='margin-left:20px;'><a href='questions.php'>Tüm sorular</a></li>";
                    echo "<li><a href='questions.php?category=$cate2'>Bilgisayar</a></li>";
                    echo "<li><a href='questions.php?category=$cate3'>Spor</a></li>";
                    echo "<li><a href='questions.php?category=$cate4'>Hobi</a></li>";
                    echo "<li><a href='questions.php?category=$cate5'>Hayat</a></li>";
                    echo "<li style='float:right; margin-right:20px;'><a href='logout.php'>Çıkış Yap</a></li>";
                echo "</ul>";
                echo '<p>Merhaba, ' . $_SESSION['username'] . '</p>';
            }
            else{
                echo '<p>Ana Sayfaya Ulaşmak İçin Giriş Yapınız</p>';
                echo '<p><a href="login.php">Giriş</a></p>';
            }






        
        ?>



        












    </body>
</html>