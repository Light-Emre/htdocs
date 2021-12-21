<?php
    include "session-control.php";

include 'config.php';

$q_tit = $_POST['q_title'];
$question =$_POST['question'];
$q_id = $_POST['q_id'];

$sql = "UPDATE question SET q_title='$q_tit' and question='$question'  WHERE id=$q_id;";
//echo $sql;
mysqli_query($conn, $sql);
header("Location:questions.php");
?>