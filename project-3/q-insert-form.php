<!DOCTYPE html>
<html lang="en">
<?php
    include "session-control.php";
    $urlal=$_GET['url'];

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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
    <link rel="stylesheet" href="formstyle.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="anasayfa4.css">
    

</head>
<body>
    <div class="container-contact100">
    <div class="wrap-contact100">
   
    

    <form class="contact100-form validate-form" action="q-insert.php" method="POST">
    <span class="contact100-form-title"  style="position: relative;left:30px;font-size:45px;">Soru Ekleyin</span>
    <form action="q-insert.php" method="post">
        <div>
           <label for="category" style="font-size :22px;">Kategori Seçin:</label> 
            <select id="category" name="category" style="width:200px;height:35px;font-size:16px;">
            <option value="Teknoloji">Teknoloji</option>
               <option value="Ev/Yaşam">Ev/Yaşam</option>
               <option value="Spor">Spor</option>
               <option value="Sağlık ">Sağlık</option>
               <input type="hidden" name="url" value="<?php echo $urlal; ?>">
               </select>
        </div> <br> 
        <div class="wrap-input100 validate-input" name="q_title" data-validate="Soru Başlığı">
        <input class="input100" style="color: rgb(20, 9, 68);"  required='required' type="text" name="q_title" placeholder="Soru Başlığı" style='color:#403866 ;'>
         <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" name="question" data-validate="Sorunuz">
          <textarea style="color: rgb(20, 9, 68);" required='required' class="input100" name="question" placeholder="Sorunuz" style='color:#403866 ;'></textarea>
          <span class="focus-input100"></span>
        </div>
        <div class="container-contact100-form-btn">
           <button class="contact100-form-btn" style="position:relative;left:30px;">
        <span>
            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
            Ekle
        </span>
           </button>
        </div>
    </form>
    </div>
    </div>
</body>
</html>
