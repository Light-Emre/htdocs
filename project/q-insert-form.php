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
        <label for="cars">Soru kategorisi:</label>
        <select id="cars" name="category">
            <option value="Bilgisayar">Bilgisayar</option>
            <option value="Spor">Spor</option>
            <option value="Hayat">Hayat</option>
            <option value="Hobi ">Hobi</option>
        </select>
            <input type="submit" value="Ekle">
        </div>
    </form> 
</body>
</html>