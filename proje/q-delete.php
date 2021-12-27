<?php
    include "session-control.php";
?>
<?php
        $q_id = $_GET['q_id'];
        $urlal=$_GET['url'];
        include 'config.php';
        $sql = "DELETE FROM questions WHERE q_id = $q_id";
        $result = mysqli_query($conn,$sql);
        //echo $sql;
        header("Location: Home.php");
    ?>