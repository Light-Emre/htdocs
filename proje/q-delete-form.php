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
</head>
<body>
    <?php
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
        }
    ?>
    <table>
        <tr>
            <td>Soru</td>
            <td><?php echo $q_baslık; ?></td>
        </tr>
        <tr>
            <td>Tarih</td>
            <td><?php echo $q_tarih; ?></td>
        </tr>
    </table>
    <hr>
    <h2>Soruyu silmek istediğinizden emin misiniz?</h2>
    <h1>
        <a href="q-delete.php?q_id=<?php echo $q_id; ?>&url=<?php echo $urlal2; ?>">
            Evet
        </a>
    </h1>
    <p>
        <a href="<?php echo $urlal2 ?>">Hayır</a>
    </p>
    
</body>
</html>
  


