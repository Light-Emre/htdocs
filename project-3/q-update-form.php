


<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Düzenle</title>
    <link rel="stylesheet" href="update.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bar-update.css">
</head>
<body>
    <?php

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




        $q_id = $_GET['q_id'];
        include 'config.php';
        $urlal=$_GET['url'];
        
        $sql = "SELECT * FROM questions WHERE q_id = $q_id";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $q_name = $row['q_title'];
            $soru = $row['question'];
            $soru_kategori=$row['category'];    
            
            
        }
    ?>
    <div class="container-contact100">
    <div class="wrap-contact100">
   
    <span class="contact100-form-title"  style="position: relative;left:30px;font-size:35px;">Soru Düzenleme</span>
    <form class="contact100-form validate-form" action="q-update.php" method="post">
        
    <div>
           <label for="category" style="font-size :22px;">Kategori Seçin:</label> 
            <select id="category" name="soru-kategori" style="width:200px;height:35px;font-size:16px;">
               <option value="Teknoloji">Teknoloji</option>
               <option value="Ev/Yaşam">Ev/Yaşam</option>
               <option value="Spor">Spor</option>
               <option value="Sağlık ">Sağlık</option>
               </select>
        </div> <br> 
    <div class="wrap-input100 validate-input" name="" data-validate="Soru ID">
        <input class="input100" type="hidden" name="soru-id" placeholder="Soru ID" value="<?php echo $q_id; ?>">
         <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" name="q_tittle" data-validate="Soru Başlığı">
        <input class="input100" type="text" style="color: rgb(20, 9, 68);"  required='required' name="soru_baslik" placeholder="Soru Başlığı" value="<?php echo $q_name; ?>" style='color:#403866 ;'>
         <span class="focus-input100"></span>
        </div>

        <input type="hidden" name="url" value="<?php echo $urlal; ?>">

        <div class="wrap-input100 validate-input" name="question" data-validate="Sorunuz">
          <textarea class="input100" required='required' style="color: rgb(20, 9, 68);" name="soru" placeholder="Sorunuz" style='color:#403866 ;'><?php echo $soru; ?></textarea>
          <span class="focus-input100"></span>
        </div>
        <div class="container-contact100-form-btn">
           <button type="submit" class="contact100-form-btn" style="position:relative;left:180px;">
        <span>
            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
            Güncelle
        </span>
           </button>
        </div>
    </form>
    </div>
    </div>
</body>
</html>

