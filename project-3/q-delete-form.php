<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Sil</title>
    <link rel="stylesheet" href="delete.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bar-update.css">
</head>
<body>
    <?php
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









        $urlal2=$_GET['url'];
        $urlal=$_SERVER['REQUEST_URI'];
        $q_id = $_GET['q_id'];
        include 'config.php';
        $sql = "SELECT * FROM questions WHERE q_id = $q_id";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $q_baslık = $row['q_title'];
            $q_tarih = $row['d_date'];
            $q_soru = $row['question'];
        }
    ?>
    <div class="container-contact100">
        <div class="wrap-contact100">
    
        <span class="contact100-form-title"  >Soruyu silmek istediğinizden emin misiniz?</span>
    
        <div class="wrap-input100 validate-input" name="q_tittle" data-validate="Soru Başlığı">
            <input class="input100" type="text" readonly="yes" name="soru_baslik" placeholder="Soru Başlığı" value="<?php echo $q_baslık; ?>">
            <span class="focus-input100"></span>
        </div>
    
        <div class="wrap-input100 validate-input" name="question" data-validate="Sorunuz">
        <textarea class="input100" readonly="yes" name="soru" placeholder="Sorunuz"><?php echo $q_soru; ?></textarea>
        <span class="focus-input100"></span>
        </div>
        </div>
    </div>
    <div class="container-contact100-form-btn">
           <button class="contact100-form-btn" onclick="window.location.href ='q-delete.php?q_id=<?php echo $q_id; ?>&url=<?php echo $urlal2; ?>'"  style="position:relative;left:200px;bottom:200px;">Evet </button>
           <div class="container-contact100-form-btn">
           <button class="contact100-form-btn" onclick="window.location.href ='<?php echo $urlal2 ?>'"  style="position:relative;right:150px;bottom:210px;">Hayır</button>       
   
</body>
</html>






