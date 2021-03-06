<?php
if(isset($_POST['submit'])){
  
    require 'database.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username) || empty($password)){
        header("Location:index.html?error=emptyfields");
        exit();
    }else{
        $sql="SELECT * FROM login WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
         if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:index.html?error=sqlerror");
        exit();
    }else{
             mysqli_stmt_bind_param($stmt,"s",$username);
             mysqli_stmt_execute($stmt);
             $result = mysqli_stmt_get_result($stmt);
             
             if($row = mysqli_fetch_assoc($result)){
                 $passCheck = $row['password'];
                 if($passCheck != $password){
                     header("Location:index.html?error=wrongpass");
                      exit();
                 }elseif($passCheck == $password){
                     session_start();
                     
                     $_SESSION['sessionUser'] = $row['username'];
                      header("Location:update.php");
                     exit();
                 }
             }else{
                 header("Location:index.html?error=nouser");
                 exit();
             }
         }
     }
}
else{
     header("Location:index.html?error=accessforbidden");
        exit();
    }
?>