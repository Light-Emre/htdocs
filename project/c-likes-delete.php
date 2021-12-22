<?php
    include "session-control.php";
    include "config.php";
    
    

    $q_id = $_GET['q_id'];
    $c_id = $_GET['c_id'];
    $user_id = $_SESSION['user_id'];
    $urlal = $_GET['url'];
    
    

    $sql6 =  "DELETE FROM likes WHERE c_id = $c_id AND user_id=$user_id AND q_id=$q_id";
    mysqli_query($conn,$sql6);
    header("Location: $urlal");
    

?>  