<?php
    include "session-control.php";
    include "config.php";
    
    

    $q_id = $_GET['q_id'];
    $user_id = $_SESSION['user_id'];
    $urlal = $_GET['url'];
    
    

    $sql6 =  "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
    $result6 = mysqli_query($conn,$sql6);
    $num_rows6 = mysqli_num_rows($result6);
    if($num_rows6 > 0){
        $sql = "UPDATE likes SET type='2' WHERE user_id=$user_id and q_id=$q_id;";     
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal");
    }else{                                
        $sql = "INSERT INTO likes (`user_id`, `q_id`, `type`) VALUES ($user_id, $q_id, 2);";
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal");
    }                        

?>    
    
    