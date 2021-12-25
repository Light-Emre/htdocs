<?php
    include "session-control.php";
?>
<?php
include 'config.php';

$qtitle = $_POST['q_title'];
$qquestion = $_POST['question'];
$cate9 = $_POST['category'];
$qusername=$_SESSION['username'];
$user_id12=$_SESSION['user_id'];



$sql = "INSERT INTO questions (q_title,question,q_username,user_id,category) VALUES ('$qtitle','$qquestion','$qusername','$user_id12','$cate9')";

mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);
if($last_id > 0)
{
    echo "Soru eklendi. " . $last_id;
    $sql66 = "INSERT INTO likes ( user_id,q_id, type) VALUES ('0','$last_id','0' )";
    mysqli_query($conn, $sql66);

    header("Location: questions.php");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>