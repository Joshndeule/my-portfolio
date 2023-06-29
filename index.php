<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Portfolio</title>
</head>
<body>
    <div class="content-container">
        <div class="nav">
            <img class="topImage" src="Icon.jpg" alt="Simple icon" width="100" height="75">
            <nav aria-label="primaly-navigation"></nav>
             <ul>
                <li>
                    <form class="search-form">
                        <input type="text" placeholder="Search..." />
                        <button type="submit"><i class="fas fa-search"></i></button>
                      </form>
                </li>
                <li>
                    <a href="contact.php">Contact me</a>
                </li>
                <li>
                    <a href="myskills.php">My skills</a>
                </li>
                <li>
                    <a href="tools.php">Tools</a>
                </li>
                <li>
                    <a href="technologies.php">Technologies</a>
                </li>
                <li>
                    <a href="/">My Portfolio</a>
                </li>
               </ul>
            </div>
        </div>
        <div class="content">
           <!-- <figure>
                <center><img src="R.png" alt="Some random html and css photo" width="50%" height="50%"></center>
                <figcaption>
                <center> Complete Web interface </center>

                </figcaption>
            </figure> -->
            <img class="Daimage" src="Jme.jpg" alt="Joshua" width="300" height="250">
            <h1>
                Ict Student <br>
                JOSHUA NDEULLE
            </h1>
            <P class="call">
                Information and Communication Technology is the heartbeat of our interconnected world. It is the driving force behind the seamless exchange of knowledge, the catalyst for innovation, and the enabler of progress. In this digital age, I am passionate about harnessing the power of ICT to unlock new frontiers, solve complex problems, and shape a future that is smarter, more inclusive, and sustainable. As an ICT enthusiast, I embrace the challenges, adapt to the rapid pace of change, and continuously strive to expand my skills and knowledge. Together, let us navigate the vast realm of technology and create a positive impact that resonates far beyond the digital realm.
            </P>
            <p>Take your time!</p>






            <div class="skill">
                <h1 style="text-align: center;" onmouseover="change(this)" onmouseout="ngecha(this)">Some of the things that i do</h1>
                <hr>
                <div class="clearfix">
                    <div class="box" style="background-color:blue">
                        <img src="design.jpg" alt="Graphic-design pic" width="400" height="300">
                        
                    </div>
                    <div class="box" style="background-color:#ccc">
                    <!-- <img src="first.jpg" alt="Some random picture" width="100%" height="100%"> --> 
                    <img src="Web.jpg" alt="Web-design pic" width="350" height="300">
                    </div>
                    <div class="box" style="background-color: aqua;">
                     <img src="Multimedia.jpg" alt="Multimedia pics" width="350" height="300">
                    </div>
                    
                  </div>
                  
            </div>
        </div>
    <footer>
    <div class="likeFooter">
        <div class="social-icons">
            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
          </div>

          <p style="text-align: center;justify-content: center;"  >If you are impressed with my work, am more than ready to work with everyone. </p>
          <p>copyright &copy; Joshua Ndeule </p>
          <p style="text-align: right;">Contact me: <a href="mailto:joshndeule@gmail.com">joshndeul@gmail.com</a></p>
    </div>
    <p>
       <button> <a href="#">Back To Top</a></button>
    </p>
    </footer>
   <script>
    function change(obj)
    {
        obj.innerHTML="Am Awesome you know right?!!"
    }
    function ngecha(obj)
    {
        obj.innerHTML = "Check my skills section to see more"
    }
   </script>
  
</body>
</html>
