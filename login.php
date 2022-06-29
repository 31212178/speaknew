<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Onlineeducationalwebsite</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

</head>
<body class="lgbody">
    <header>

    
        <h1>
            <div1><img src="speaknew.png" alt="img" width="150" height="58"></div1>
            
            <nav class="nav1"> 
                <a href="home.php">Home</a>
                <a href="courseoverview.php">Courses</a>
                <a href="review.php">Review</a>
            </nav>
        </h1>
    </header>
    
    
    <div class="login page"> 
        <div class="form">
          
            
        
            <form class="register-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                <img src="speaknew.png" alt="img" width="180" height="68">
                <input type="text" placeholder="Username" id="username" name="un" required/>
                <input type="password" placeholder="Password" id="password" name="pw" required/>
                <input type="password" placeholder="Confirm Password" id="confirmpassword" name="cpw"/>
                <input type="text" placeholder="Email id" id="emailid" name="em"/>
                <button type="submit" name="reg">register</button>
                <p class="message">Already Registerd? <a href="#">Login</a></p>
            </form>
    
           
           
           
           
        
           
            <form class="login-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                <img src="speaknew.png" alt="img" width="180" height="68">

                <div>
               <p class="bg-success text-black px-4"> <?php 
              
                 if(isset($_SESSION['msg']))
                 {
                     echo $_SESSION['msg'];
                 }
                 else
                 {
                     echo $_SESSION['msg'] = "You are Logged out. Please Login again.";
                 }
              
    
               
               ?>  </p>
                </div>
                
                <input type="text"placeholder="Email" name="em"/>
                <input type="password"placeholder="Password" name="pw"/>
                
                <button type="submit" name="log">login</button>
                <p class="message">Not Registered? <a href="#">Register</a></p>
            </form>
        </div>
    </div>
</div>     

<script src='https://code.jquery.com/jquery-3.6.0.min.js'>
</script>

<script>
    $('.message a').click(function(){
        $('form').animate({height:"toggle",opacity:"toggle"},"slow");

    });
</script>










<?php
     $server = "localhost:3307";
     $user = "root";
     $password = "";
     $db = "logindb";
     
     $con=mysqli_connect($server,$user,$password,$db);
     

/*     if($con)
{
    ?>
       <script>
           alert("Connection Successfull");
       </script>
    <?php
}else{
    ?>
       <script>
           alert("No Connection");
       </script>
    <?php
} */


     





    // REGISTRATION (EMAIL VERIFICATION)


    if(isset($_POST['reg']))
     {
         $username = mysqli_real_escape_string($con,$_POST['un']);
         $password = mysqli_real_escape_string($con,$_POST['pw']);
         $confirmpassword = mysqli_real_escape_string($con,$_POST['cpw']);
         $email = mysqli_real_escape_string($con,$_POST['em']);


        $pass = password_hash($password, PASSWORD_BCRYPT);
        $confirmpass = password_hash($confirmpassword, PASSWORD_BCRYPT);

        $token = bin2hex(random_bytes(15));

        $emailquery = " select * from registered where email='$email'";
        $query = mysqli_query($con,$emailquery);
        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            ?>
                <script>
                        alert("email already exits");
                </script>
           <?php
        }else{
            if($password === $confirmpassword){
             
                $insertquery = "insert into registered(username,password,confirmpassword,email,token,status) values('$username','$pass','$confirmpass','$email','$token','inactive')";

                $iquery = mysqli_query($con,$insertquery);

                if($iquery)
                {
                   $subject = "Email Activation";
                   $body = "Hi, $username. Click here to activate your account 
                   http://localhost/phpmyadmin/edu/activate.php?token=$token";
                   $senders_email = "From: aniketpatil1620@gmail.com";
                   
                   if(mail($email,$subject,$body,$senders_email))
                   {
                       $_SESSION['msg'] = "Check your mail to activate your account $email";
                       header('location: login.php');
                   }
                 
                }else
                {
                 echo "Email sending failed...";
                 
                }

            }else{
                ?>
                <script>
                        alert("password are not matching");
                </script>
                 <?php
            }
        }
    }








    // LOGIN PHP CONNECTION

    if(isset($_POST['log']))
    {
      $email = $_POST['em'];
      $password = $_POST['pw'];

      $email_search = " select * from registered where email='$email' and status='active'";
      $query = mysqli_query($con,$email_search);

      $email_count = mysqli_num_rows($query);




      if($email_count)
      {
       $email_pass = mysqli_fetch_assoc($query);

       $db_pass = $email_pass['password'];

       $_SESSION['username'] = $email_pass['username'];
       $_SESSION['email'] = $email = $_POST['em'];

       $pass_decode = password_verify($password, $db_pass);

       if($pass_decode)
       {
        ?>
        <script>
                alert("Login Succesfull");
                location.replace("index.php");
        </script>
         <?php
       
       }else{
        ?>
        <script>
                alert("Incorrect Password");
        </script>
         <?php
       }
    
      }else{
        ?>
        <script>
                alert("Invalid Email");
        </script>
         <?php
      

      }

    }



?>



</body>
</html>