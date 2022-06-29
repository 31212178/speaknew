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
<body>
    <header>

    
        <h1>
        <div1><img src="speaknew.png" alt="img" width="150" height="64"></div1>
            
        <nav class="login-signup">
            <a href="logout.php">Logout</a>
        </nav>

        <nav class="nav1"> 
                <a href="index.php">Home</a>
                <a href="courses.php">Courses</a>
                <a href="reviewmain.php">Review</a>
                <a href="#lastsection">About</a>
                <a href="#lastsection">Contact</a>
            </nav>
        </h1>

</header>
<form method="post">
<div class="reviewcontainer" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">   
<input type="text" placeholder="Full Name" name="fn"required>
  <br>  
  <input type="email" placeholder="Email Address" name="em"required>
  <br>  
<textarea type="text" placeholder="Text Area" name="ta" required ></textarea><br>
<button name="sub">
SUBMIT FEEDBACK
</button>

</form>
</div>


    <section id="lastsection">
        <footer>
        <h5>  Quick Links </h5>
            <a href="index.php">Home</a><br>
            <a href="courses.php">Courses</a><br>
            <a href="reviewmain.php">Review</a><br>
            
           </div>
        </footer>
        </section>
</body>
</html>




<?php
     $server = "localhost:3307";
     $user = "root";
     $password = "";
     $db = "feedbackdb";
     
     $con=mysqli_connect($server,$user,$password,$db);

     if(isset($_POST['sub']))
     {
      $fullname = $_POST['fn'];
      $email = $_POST['em'];
      $text = $_POST['ta'];

      $insertquery = "insert into review(fullname,email,text) values('$fullname','$email','$text')";

                $iquery = mysqli_query($con,$insertquery);

     }
?>




