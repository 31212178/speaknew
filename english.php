<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaknew</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="coursesvideo.css">
   

</head>
<body class="engbody">
    
    <header>

        
        <h1>
        <div1><img src="speaknew.png" alt="img" width="150" height="58"></div1>
            
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
    
<div class="engcontainer">
    <div class="engbox">
           <h3 >CHAPTER 1</h3>
             <p class="heading">10 Daily Life English Words. </p>
             <p class="info">This video is about English Speaking and ways how we can improve our <br> personality.
                             In this video, we will learn 10 words which can make your English <br>impressive. 
                             Now Speak English in a better way with these 10 words.<br>
                             Practice these 10 words daily to impress others.<br> <br><br>
                             Duration :- 8 min</p>
             <a class="assignbtn" href="ENGLISH 1.pdf">Assignment</a>
        <section class="coursevideo1">
          <iframe width="460" height="210" src="https://www.youtube.com/embed/lGTt9Mfg0X0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
    </div>
        
    <div class="engbox">
           <h3 >CHAPTER 2</h3>
           <p class="heading">Learn the way to say Thank you in different ways.</p>
           <p class="info">In this video, we are going to learn the way to say Thank you in different ways.<br> 
           We are bound to speak English in a way we learned from our childhood to now.<br> 
           And we make mistakes, but from now you will never face such issue because <br>this video will teach you the ways to stop making such mistakes.<br><br><br>
           Duration :- 14 min</p>
           <a class="assignbtn" href="ENGLISH 2.pdf">Assignment</a>
           <section class="coursevideo2">
           <iframe width="460" height="210" src="https://www.youtube.com/embed/id1ourHpS9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
     </div>
        
        <div class="engbox">
        <h3 >CHAPTER 3</h3>
        <p class="heading">L.S.R.W. Trick | Learn/Speak/Read/Write English Trick</p>
           <p class="info">After all your queries and questions that how to be overall good in English.<br>So, Here is the video with tips and Tricks which can lay off all your fear and <br>can improve your English.<br><br><br><br>
           Duration :- 9 min</p>
        <a class="assignbtn" href="ENGLISH 3.pdf">Assignment</a>
        <section class="coursevideo3">
        <iframe width="460" height="210" src="https://www.youtube.com/embed/ptE0rlov0v0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        </div>
        
        <div class="engbox">
        <h3 >CHAPTER 4</h3>
        <p class="heading">Story of "Is, Am, Are, Was, Were, Has, Have, Had Been <br>Concept/Usage/Conditional Sentences/Practice</p>
           <p class="info">Learn how to use and how to create conditional sentences. <br><br><br><br><br>
           Duration :- 19 min</p>
        <a class="assignbtn" href="ENGLISH 4.pdf">Assignment</a>
        <section class="coursevideo3">
        <iframe width="460" height="210" src="https://www.youtube.com/embed/aSBzS0pzaBs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        </div>
        
        <div class="engbox">
        <h3 >CHAPTER 5</h3>
        <p class="heading">Spoken English | Phrasal Verb | 3 New Tricks</p>
           <p class="info">This video is about 3 best short tricks of Phrasal Verbs and Spoken English.<br>In this short video, You will consume a lot of info which will make your English <br>smooth and excellent.<br><br><br><br>
           Duration :- 9 min</p>
        <a class="assignbtn" href="ENGLISH 5.pdf">Assignment</a>
        <section class="coursevideo3">
        <iframe width="460" height="210" src="https://www.youtube.com/embed/1iWDN5-dqL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        </div>
    
        
    </div>

    <div class="querycontainer">
    <form method="post">
       <div class="querybox">
           <h4>Post your Queries here</h4>
           
        <input type="text" placeholder="Name" name="fn"required><br>  
        <input type="email" placeholder="Email" name="em"required><br>  
        <textarea type="text" placeholder="Comment" name="cm" required ></textarea><br>
        <button name="sub">
            Post Comment
        </button>
       
       </div>
       </form>



    </div>
     

     
     <footer>
     <h5>  Quick Links </h5>
            <a href="index.php">Home</a><br>
            <a href="courses.php">Courses</a><br>
            <a href="reviewmain.php">Review</a><br>
            
           </div>
     </footer>
</body>
</html>


<?php
     $server = "localhost:3307";
     $user = "root";
     $password = "";
     $db = "querydb";
     
     $con=mysqli_connect($server,$user,$password,$db);

     if(isset($_POST['sub']))
     {
      $fullname = $_POST['fn'];
      $email = $_POST['em'];
      $comment = $_POST['cm'];

      $insertquery = "insert into query(fullname,email,comment) values('$fullname','$email','$comment')";

                $iquery = mysqli_query($con,$insertquery);

     }
?>