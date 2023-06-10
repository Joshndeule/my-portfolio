<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technologies</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
          body{
    background-color: aliceblue;
    margin: 0px;
}
.content-container{
  display: grid;
  width: 100%;
  height: 100%;
  
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
  li a:hover {
    background-color: #00222f;
  }
  li a:visited {
    color: whitesmoke;
  }
  li a:active {
    background-color: #00222f;
  }
  .topImage{
  padding: 0.5%;
  
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
.likeFooter {
    display: grid;
  background-color: black;
  border-style: solid black;
  color: whitesmoke;
  padding: 0;
  width: 100%;
  height: 100%;
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
.container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(3, 1fr);
      gap: 10px;
      justify-items: center;
      align-items: center;
      padding: 5%;
     
}

    .box {
      width: 350px;
      height: 300px;
      background-color: #f1f1f1;
      border: 2px solid #333;
      border-radius: 30px;
      box-sizing: border-box;
      text-align: center;
      padding: 10%;
    }

    </style>
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
                    <a href="index.php">My Portfolio</a>
                </li>
               </ul>
            </div>
            <h1 style="text-align: center; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Some of the technoogies that i've worked with.</h1>
              <div class="container">
                <div class="box">
                  <img src="assets/HTML5.png" alt="html pic" width="200">
                </div>
                <div class="box">
                  <img src="assets/CSS-Logo.png" alt="CSS Logo" width="300" height="200">
                </div>
                <div class="box">
                  <img src="assets/js.png" alt="Javascript" width="200">
                </div>
                <div class="box">
                  <img src="assets/MySql.jpg" alt="MySql" width="200">
                </div>
                <div class="box">
                  <img src="assets/R.png" alt="PHP" width="300">
                </div>
                <div class="box">
                  <img src="assets/Git.png" alt="" width="200">
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
                   <button > <a style="color: black;" href="#">Back To Top</a></button>
                </p>
                </footer>
    </div>               
</body>
</html>