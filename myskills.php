<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Skills</title>
    <style>
          body {
      margin: 0%;
      padding: 0;
    }

    .container {
      display: grid;
      width: 100%;
      height: 100%;
      word-wrap: normal;
    }
    .topImage{
       padding: 0.5%;
  
}
    .nav {
    background-color: blue;
    border-style:  solid blue;
    color: whitesmoke;
}
.nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    background-color: blue;
  }

 .nav li {
    float: right;
    text-align: center;
  }

  .nav a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover {
    background-color: #00222f;
  }
  .search-form {
  display: flex;
  align-items: center;
}

.search-form input {
  padding: 5px;
  border: 1px solid black;
  border-radius: 3px;
}

.search-form button {
  background-color: blue;
  border: none;
  cursor: pointer;
}
li a:visited {
    color: whitesmoke;
  }
  li a:active {
    background-color: #00222f;
  }
  .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .all{
            display: grid;
            background-color: skyblue;
            width: 100%;
            height: 100%;
            padding: 0;
        }
        
        .title {
            cursor: pointer;
            background-color: #8CBFDC;
            padding: 10px;
            text-align: center;
        }
          .content {
            display: none;
            padding: 10px;
            background-color: white;
        }
        button{
           background-color: #8CBFDC;
           border-color: transparent;
           border-radius: 50%;
           margin: 4px 2px;
           cursor: pointer;
           padding: 20px;
           
        }
        canvas {
            border: 1px solid #000;
            border-radius: 50%;
        }
        .mainone{
            display:grid;
            width: 100%;
            height: 100%;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            padding-left: 0;
            padding-right: 5%;
        }
        #first{
            background-color: whitesmoke;
            text-align: center;
        }
        #second{
            background-color: whitesmoke;
            text-align: center;
        }
        #third{
            background-color: whitesmoke;
            text-align: center;
        }
        #forth{
            background-color: whitesmoke;
            text-align: center;
        }
        .likeFooter {
            display: grid;
  background-color: black;
  border-style: solid black;
  color: whitesmoke;
  padding: 0;
  width: 100%;
}
.social-icons {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.social-icons a {
  display: inline-block;
  margin: 0 10px;
}

.social-icons i {
  color: blue ;
  font-size: 60px;
}

    </style>
</head>
<body>
    <div class="container">
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
                    <a href="contact.php">Contact Me</a>
                </li>
                <li>
                    <a href="myskills.php">My Skills</a>
                </li>
                <li>
                    <a href="tools.php">Tools</a>
                </li>
                <li>
                    <a href="technologies.php">Technologies</a>
                </li>
                <li>
                    <a href="index.php">My Portfolio</a>
                </li>
               </ul>
            </div>
            <hr>
            <div class="all">
              <div class="grid">
                <button>  <div class="title"  onclick="toggleContent(0)">Experience</div> </button>
                <button> <div class="title" onclick="toggleContent(1)">Education</div> </button>
                <button> <div class="title" onclick="toggleContent(2)">Certification</div> </button>
              </div>
              
              <div class="content" id="content1">
                  <h1>Experience</h1>
                  <p>As an enthusiastic professional in the field of Information and Communication Technology (ICT), I have gained valuable experience and honed my skills in various programming languages and technologies. My expertise lies in JavaScript, CSS, HTML, and Java, which have allowed me to develop dynamic and interactive web applications, as well as contribute to the development of robust software solutions. My experience in JavaScript, CSS, HTML, and Java, combined with my strong problem-solving and communication skills, has allowed me to thrive in the ever-evolving field of ICT. I am passionate about staying up-to-date with the latest technologies and trends, continuously enhancing my skills to deliver innovative and impactful solutions. I look forward to leveraging my expertise to contribute to exciting projects and drive technological advancements in the ICT industry.
          
                  </p>
              </div>
              <div class="content" id="content2">
                  <h>Education</h>
                  <p>Am an ICT student at Mzuzu University, Malawi.</p>
              </div>
              <div class="content" id="content3">
                  <h1>Certification</h1>
                  <p>None as of now</p>
              </div>
              </div>
              <hr>

                 <h1 style="text-align: center;">MY SKILLS</h1>
                 
              <div class="mainone">
                <div id="first">
                    <h1>Programming</h1>
                    <canvas id="progressCircle" width="200" height="200"></canvas>
            </div> 
            <div id="second">
                <h1>Wed development</h1>
                <canvas id="progressCircle1" width="200" height="200"></canvas>
            </div>
            <div id="third">
                <h1>Problem Solving</h1>
                <canvas id="progressCircle2" width="200" height="200"></canvas>
            </div>
            <div id="forth">
                <h1>Creativity</h1>
                <canvas id="progressCircle3" width="200" height="200"></canvas>
            </div>
            </div>
            <hr>
            <hr>
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
                   <button > <a style="color: black;" href="#">Back To Top</a></button>
                </p>
                </footer>
           
              <script>
                  function toggleContent(index) {
                      var contentElements = document.getElementsByClassName('content');
                      for (var i = 0; i < contentElements.length; i++) {
                          if (i === index) {
                              contentElements[i].style.display = 'block';
                          } else {
                              contentElements[i].style.display = 'none';
                          }
                      }
                  }
                  function drawProgressCircle(canvas, percentage) {
            var context = canvas.getContext('2d');
            var x = canvas.width / 2;
            var y = canvas.height / 2;
            var radius = (canvas.width - 10) / 2;
             context.clearRect(0, 0, canvas.width, canvas.height);

            
            context.beginPath();
            context.arc(x, y, radius, 0, 2 * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#ddd';
            context.stroke();

            
            context.beginPath();
            context.arc(x, y, radius, -0.5 * Math.PI, (2 * percentage / 100 - 0.5) * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#007bff';
            context.stroke();
        }
        
        var progress = 50; 
        var canvas = document.getElementById('progressCircle');
        drawProgressCircle(canvas, progress);

        function drawProgressCircle(canvas, percentage) {
            var context = canvas.getContext('2d');
            var x = canvas.width / 2;
            var y = canvas.height / 2;
            var radius = (canvas.width - 10) / 2; 
             context.clearRect(0, 0, canvas.width, canvas.height);

            
            context.beginPath();
            context.arc(x, y, radius, 0, 2 * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#ddd';
            context.stroke();

            
            context.beginPath();
            context.arc(x, y, radius, -0.5 * Math.PI, (2 * percentage / 100 - 0.5) * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#007bff';
            context.stroke();
        }
    
        var progress = 50; 
        var canvas = document.getElementById('progressCircle1');
        drawProgressCircle(canvas, progress);
        function drawProgressCircle(canvas, percentage) {
            var context = canvas.getContext('2d');
            var x = canvas.width / 2;
            var y = canvas.height / 2;
            var radius = (canvas.width - 10) / 2;
             context.clearRect(0, 0, canvas.width, canvas.height);

            
            context.beginPath();
            context.arc(x, y, radius, 0, 2 * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#ddd';
            context.stroke();

            
            context.beginPath();
            context.arc(x, y, radius, -0.5 * Math.PI, (2 * percentage / 100 - 0.5) * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#007bff';
            context.stroke();
        }
           
        var progress = 40; 
        var canvas = document.getElementById('progressCircle2');
        drawProgressCircle(canvas, progress);
        function drawProgressCircle(canvas, percentage) {
            var context = canvas.getContext('2d');
            var x = canvas.width / 2;
            var y = canvas.height / 2;
            var radius = (canvas.width - 10) / 2; 
             context.clearRect(0, 0, canvas.width, canvas.height);

           
             context.beginPath();
            context.arc(x, y, radius, 0, 2 * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#ddd';
            context.stroke();

           
            context.beginPath();
            context.arc(x, y, radius, -0.5 * Math.PI, (2 * percentage / 100 - 0.5) * Math.PI);
            context.lineWidth = 10;
            context.strokeStyle = '#007bff';
            context.stroke();
        }
           
        var progress = 75; 
        var canvas = document.getElementById('progressCircle3');
        drawProgressCircle(canvas, progress);
              </script>
    </div>
   
</body>
</html>