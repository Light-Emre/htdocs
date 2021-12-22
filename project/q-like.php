<?php
    include "session-control.php";
    include "config.php";
    
    

    $q_id = $_GET['q_id'];
    $user_id = $_SESSION['user_id'];
    $urlal = $_GET['url'];
    



    $sql7 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=2 and c_id=0";
    $result7 = mysqli_query($conn,$sql7);
    $num_rows7 = mysqli_num_rows($result7);
    if($num_rows7 > 0){
        $sql = "UPDATE likes SET type='1' WHERE user_id=$user_id and q_id=$q_id and c_id=0;";     
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal");
    }else{                                
        $sql = "INSERT INTO likes (`user_id`, `q_id`, `type`, `c_id`) VALUES ($user_id, $q_id, 1, 0);";
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal"); }
?>

