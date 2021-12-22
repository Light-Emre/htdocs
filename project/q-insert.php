<?php
    include "session-control.php";
?>
<?php
include 'config.php';

$qtitle = $_POST['q_title'];
$qquestion = $_POST['question'];
$qusername=$_SESSION['username'];
$user_id12=$_SESSION['user_id'];



$sql = "INSERT INTO questions (q_title,question,q_username,user_id) VALUES ('$qtitle','$qquestion','$qusername','$user_id12')";

mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);
if($last_id > 0)
{
    echo "Soru eklendi. " . $last_id;
    header("Location: questions.php");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>