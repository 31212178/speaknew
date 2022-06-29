<?php
   session_start();

 
     $server = "localhost:3307";
     $user = "root";
     $password = "";
     $db = "logindb";
     
     $con=mysqli_connect($server,$user,$password,$db);
    

     if(isset($_GET['token']))
     {
       $token = $_GET['token'];

       $updatequery = " update registered set status='active' where token='$token'";

       $query = mysqli_query($con,$updatequery);

       if($query)
       {
            if(isset($_SESSION['msg']))
           {
               $_SESSION['msg'] = "Account activated successfully.";
               header('location:login.php');
           }else{
               $_SESSION['msg'] = "You are logged out.";
               header('location:login.php');
           }
       }else{
              $_SESSION['msg'] = "Account not activated.";
              header('location:login.php#');
       }
     
    }
?>