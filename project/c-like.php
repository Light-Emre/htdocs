<?php
    include "session-control.php";
    include "config.php";
    
    

    $c_id = $_GET['c_id'];
    $q_id = $_GET['q_id'];
    $user_id = $_SESSION['user_id'];
    $urlal = $_GET['url'];
    


    $sql7 =  "SELECT * FROM likes WHERE c_id = $c_id AND user_id=$user_id AND type=2 AND q_id=$q_id";
    $result7 = mysqli_query($conn,$sql7);
    $num_rows7 = mysqli_num_rows($result7);
    if($num_rows7 > 0){
        $sql = "UPDATE likes SET type='1' WHERE user_id=$user_id and c_id=$c_id and  q_id=$q_id;";     
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal");
    }else{                                
        $sql = "INSERT INTO likes (`user_id`, `c_id`, `type`, `q_id`) VALUES ($user_id, $c_id, 1,$q_id);";
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal"); 
    }
?>

