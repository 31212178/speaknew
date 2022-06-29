<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Onlineeducationalwebsite</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    

    
</head>
<body class="homebody">
    <header>

        
    <h1>
    <div1><img src="speaknew.png" alt="img" width="150" height="58"></div1>
        
       <nav class="login-signup">
        <a href="login.php">Login</a>

       </nav >
       
        <nav class="nav1"> 
            <a href="home.php">Home</a>
            <a href="courseoverview.php">Courses</a>
            <a href="review.php">Review</a>
            <a href="#lastsection">About</a>
            <a href="#lastsection">Contact</a>
        </nav>
        
    </h1>
    

</header> 
  
     
 
<div class="homecontainer">
    <img  src="home-bg.jpg" alt="img" width="1887px">

    <div class="maindiv">

    </div>

    <div class="title1">
       REGISTER NOW
    </div>
 
    <div class="maindiv01">

    </div>

    <div class="maindiv2">

    </div>

    <div class="maindiv03">

    </div>

    <div class="title3">
       LET'S SPEAK NEW 
    </div>

    <div class="maindiv04">

    </div>

    <div class="title4">
    EXPLORE VIDEO LECTURES
    </div>

    </div>



    
  
 



  

    <section id="lastsection">
    <footer>
           <div>
              <h5>  Quick Links </h5>
            <a href="home.php">Home</a><br>
            <a href="courseoverview.php">Courses</a><br>
            <a href="review.php">Review</a><br>
            
           </div>

    </footer>
    </section>

    <style>
   
   .title1
   {
    position: absolute;
    top: 280px;
    left: 690px;
    font-size:70px;
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 1px;
    color: white;
    -webkit-text-stroke: 6px white;
    
   }

   .title3
   {
    position: absolute;
    top: 1280px;
    left: 490px;
    font-size:70px;
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 1px;
    color: white;
    -webkit-text-stroke: 6px white;
    
   }

   .title4
   {
    position: absolute;
    top: 2150px;
    left: 500px;
    font-size:70px;
    font-family: 'Open Sans', sans-serif;
    letter-spacing: 1px;
    color: white;
    -webkit-text-stroke: 6px white;
    
   }

   .maindiv
   {
     width: 50%;
     height: 500px;
     position: absolute;
     left: 50%;
     top: 60%;
     transform: translate(-50%, -50%);
     background-image: url(regbg.png);
     background-size: 100% 100%;
     border: 4px solid#fc9c12;
     border-top: 120px solid#fc9c12;
     animation:slider1 7s infinite linear;
     }
     .maindiv01
     {
     width: 50%;
     height: 72%;
     position: absolute;
     left: -4.5%;
     top: 14%;
     background-repeat: repeat-y;
     background-image: url(png1.png);
     }

     .maindiv2
     {
     width: 32%;
     height: 100%;
     position: absolute;
     left: 67%;
     top: 132%;
     background-repeat: no-repeat;
     background-image: url(png4.png);
     }

     .maindiv03
   {
     width: 50%;
     height: 500px;
     position: absolute;
     left: 40%;
     top: 60%;
     transform: translate(-50%, 110%);
     background-image: url(frenchbg.jpg);
     background-size: 100% 100%;
     border: 4px solid#fc9c12;
     border-top: 120px solid#fc9c12;
     animation:slider2 7s infinite linear;
     }

     .maindiv04
   {
     width: 50%;
     height: 500px;
     position: absolute;
     left: 50%;
     top: 60%;
     transform: translate(-50%, 250%);
     background-image: url(videobg1.png);
     background-size: 100% 100%;
     border: 4px solid#fc9c12;
     border-top: 120px solid#fc9c12;
     animation:slider3 7s infinite linear;
     }

     @keyframes slider1
     {
       0%{background-image: url(regbg.png);}
       
       35%{background-image: url(emailbg.png); }
       
       75%{background-image: url(logbg.png);}  
     }

     @keyframes slider2
     {
       0%{background-image: url(frenchbg.jpg);}
       
       35%{background-image: url(coursebg.png); }
       
       75%{background-image: url(germanbg.jpg);}  
     }

     @keyframes slider3
     {
       0%{background-image: url(videobg1.png);}
       
       35%{background-image: url(videobg3.png); }
       
       75%{background-image: url(videobg2.png);}  
     }

</style>


    
</body>
</html>