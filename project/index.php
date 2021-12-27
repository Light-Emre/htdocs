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

            




            session_start();
            if(isset($_SESSION['username'])){
                echo '<p>Merhaba, ' . $_SESSION['username'] . '</p>';
               
                echo '<p><a href="logout.php">Çıkış Yap</a></p>';
                echo '<p><a href="questions.php">Sorular</a></p>';
                echo '<p><a href="q-insert-form.php">Soru Ekle</a></p>';
                echo "<a href='questions.php?category=Bilgisayar'>Bilgisayar</a>";
                echo "</br>";
                echo "<a href='questions.php?category=Spor'>Spor</a>";
                echo "</br>";
                echo "<a href='questions.php?category=Hobi'>Hobi</a>";
                echo "</br>";
                echo "<a href='questions.php?category=Hayat'>Hayat</a>";
                
                
            }
            else{
                echo '<p>Ana Sayfaya Ulaşmak İçin Giriş Yapınız</p>';
                echo '<p><a href="login.php">Giriş</a></p>';
            }
        ?>
    </body>
</html>