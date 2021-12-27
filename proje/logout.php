
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// session değişkenlerini sil
session_unset();

// oturumu kapat
session_destroy();

header("Location: login.php");

?>
<hr>

</body>
</html>