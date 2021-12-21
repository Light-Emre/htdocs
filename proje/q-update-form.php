<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>
<body>
    <?php
        $q_id = $_GET['q_id'];
        include 'config.php';
        echo $q_id;
        $sql = "SELECT * FROM questions WHERE q_id = $q_id";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $q_name = $row['q_title'];
            $soru = $row['question'];
            
        }
    ?>
    

    <form action="q-update.php" method="post">
        <div>Soru Başlıgı
        <input type="text" name="soru-baslık" value="<?php echo $q_name; ?>">
        </div>
        <br>
        <div>Sorunuz     <textarea name="soru"  cols="30" rows="10" value="<?php echo $soru; ?>">
        </div>
        <div> <br>
            <input type="submit" value="Güncelle">
        </div>
    </form>
</body>
</html>