<!DOCTYPE html>
<html lang="en">
<?php
    include "session-control.php";
    $urlal=$_GET['url'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
    <link rel="stylesheet" href="formstyle.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    

</head>
<body>
    <div class="container-contact100">
    <div class="wrap-contact100">
    <p style="position:relative;right:300px;">
        <a href="Home.php" style="text-decoration:none;">Geri Dön</a>
    </p>
    

    <form class="contact100-form validate-form" action="q-insert.php" method="POST">
    <span class="contact100-form-title"  style="position: relative;left:30px;font-size:45px;">Soru Ekleyin</span>
    <form action="q-insert.php" method="post">
        <div>
           <label for="category" style="font-size :22px;">Kategori Seçin:</label> 
            <select id="category" name="category" style="width:200px;height:35px;font-size:16px;">
               <option value="Bilgisayar">Bilgisayar</option>
               <option value="Spor">Spor</option>
               <option value="Hayat">Hayat</option>
               <option value="Hobi ">Hobi</option>
               <input type="hidden" name="url" value="<?php echo $urlal; ?>">
               </select>
        </div> <br> 
        <div class="wrap-input100 validate-input" name="q_title" data-validate="Soru Başlığı">
        <input class="input100" type="text" name="q_title" placeholder="Soru Başlığı">
         <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" name="question" data-validate="Sorunuz">
          <textarea class="input100" name="question" placeholder="Sorunuz"></textarea>
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
