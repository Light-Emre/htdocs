<?php
    include "session-control.php";

include 'config.php';

$q_tit = $_POST['soru_baslik'];
$question =$_POST['soru'];
$q_id = $_POST['soru-id'];
$q_kate=$_POST['soru-kategori'];
$urlal=$_POST['url'];    

$sql = "UPDATE questions SET q_title='$q_tit' , question='$question' , category='$q_kate' WHERE q_id='$q_id'";
mysqli_query($conn, $sql);
//echo $sql;

header("Location: $urlal");
?>