<?php
    include "session-control.php";
    include "config.php";
    
    

    $q_id = $_GET['q_id'];
    $c_id = $_GET['c_id'];
    $user_id = $_SESSION['user_id'];
    $urlal = $_GET['url'];
    
    

    $sql6 =  "SELECT * FROM c_likes WHERE c_id = $c_id AND user_id=$user_id AND  type=1 and q_id=$q_id";
    $result6 = mysqli_query($conn,$sql6);
    $num_rows6 = mysqli_num_rows($result6);
    if($num_rows6 > 0){
        $sql = "UPDATE c_likes SET type='2' WHERE user_id=$user_id and q_id=$q_id and c_id=$c_id;";     
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal");
    }else{                                
        $sql = "INSERT INTO c_likes (`user_id`, `c_id`, `type`, `q_id`) VALUES ($user_id, $c_id, 2 ,$q_id);";
        $result = mysqli_query($conn, $sql);
        header("Location: $urlal");
    }                        

?>    
    
    