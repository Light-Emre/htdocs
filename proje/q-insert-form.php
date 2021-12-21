<!DOCTYPE html>
<html lang="en">
<?php
    include "session-control.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>
<body>
    <form action="q-insert.php" method="post">
        <div>Soru Başlıgı
        <input type="text" name="q_title">
        </div>
        <br>
        <div>Sorunuz    
            <textarea name="question" id="" cols="30" rows="10"></textarea>
        </div>
        <div> <br>
            <input type="submit" value="Ekle">
        </div>
    </form>
</body>
</html>