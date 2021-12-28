<?php
    include "session-control.php";
?>
<?php
        $q_id = $_GET['q_id'];
        $urlal=$_GET['url'];
        include 'config.php';
        $sql = "DELETE FROM questions WHERE q_id = $q_id";
        $result = mysqli_query($conn,$sql);
        $sql2 = "DELETE FROM comment WHERE que_id = $q_id";
        $result2 = mysqli_query($conn,$sql2);
        $sql3 = "DELETE FROM likes WHERE q_id = $q_id";
        $result3 = mysqli_query($conn,$sql3);
        $sql4 = "DELETE FROM c_likes WHERE q_id = $q_id";
        $result4 = mysqli_query($conn,$sql3);
        //echo $sql;
        header("Location: Home.php");

    ?>