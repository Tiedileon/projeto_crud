<?php
if($_POST){
    include('inc/utils.php');
    $conn = getConn();
    if($conn){
        $result = getUser($conn, $_POST['email'], $_POST['senha']);
        if($result->num_rows == 1){
            $user = mysqli_fetch_object($result);
            if(session_start()){
                $_SESSION["AUTH"] = true;
                $_SESSION["SESSIONEMAIL"] = $user->email;
                $_SESSION["SESSIONNAME"] = $user->nome;
                $_SESSION["SESSIONID"] = $user->id;
                header('Location:lista.php');                
            }
        } else {
            header('Location:index.php?r=user_not_found');
        }
           
    } else {
    header('Location:index.php');    
    }
} else {
    header('Location:index.php');
}
?>