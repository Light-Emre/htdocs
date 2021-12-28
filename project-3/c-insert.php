<?php
    include "session-control.php";
?>
<?php
include 'config.php';

$ans = $_POST['answer'];
$qusername22=$_SESSION['username'];
$user_id13=$_SESSION['user_id'];
$sorusu=$_GET['q_id'];




$sql22 = "INSERT INTO comment (c_comment,c_username,u_id,que_id) VALUES ('$ans','$qusername22','$user_id13','$sorusu')";

mysqli_query($conn, $sql22);
$last_id2 = mysqli_insert_id($conn);
if($last_id2 > 0)
{
    echo "Soru eklendi. " . $last_id2;
    $sql68 = "INSERT INTO c_likes ( user_id,q_id,c_id, type) VALUES ('0','$sorusu','$last_id2','0' )";
    mysqli_query($conn, $sql68);
    header("Location: q-page.php?q_id=$sorusu");
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>