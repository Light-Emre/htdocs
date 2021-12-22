<!DOCTYPE html>
<html lang="en">
<?php
    include "session-control.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yanıt Ekle</title>
</head>
<body>
    <form action="q-answer-action.php" method="post">
        <br>
        <div>Yanıtınız    
            <textarea name="answer" id="" cols="30" rows="10"></textarea>
        </div>
        <div> <br>
            <input type="submit" value="Yorum Yap">
        </div>
    </form>
</body>
</html>