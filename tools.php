<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
    background-color: aliceblue;
    margin: 0px;
    padding: 0;
    font-family: Arial, sans-serif;   
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
  #output{
      text-align: center;
      padding: 5%;
      font-size: large;
      font-family: cursive;
  }
    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    .symbol-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
    }

.symbol-card {
  background-color: #FFFFFF;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
}

.html {
  background-color: #4A90E2;
  color: #FFFFFF;
}

.css {
  background-color: #254BDD;
  color: #FFFFFF;
}

.mysql {
  background-color: #f5f8f9;
  color: #6987f1;
}
.php{
    background-color: #00758F;
}
.javascript{
  background-color: #f2ff3f;
}
</style>
<script>
  function typingAnimation() {
      var words = ["I am a Programmer", "Every Proggramer needs tools", "I have lots of tools that i use...", "This are some of my tools"];
      var currentWordIndex = 0;
      var currentWord = words[currentWordIndex];
      var letterIndex = 0;
      var typingSpeed = 150; // Adjust typing speed (in milliseconds)

      var outputElement = document.getElementById("output");

      function typeNextLetter() {
          if (letterIndex < currentWord.length) {
              outputElement.textContent += currentWord.charAt(letterIndex);
              letterIndex++;
              setTimeout(typeNextLetter, typingSpeed);
          } else {
              setTimeout(deleteWord, typingSpeed);
          }
}

      function deleteWord() {
          if (letterIndex >= 0) {
              outputElement.textContent = currentWord.substring(0, letterIndex);
              letterIndex--;
              setTimeout(deleteWord, typingSpeed);
          } else {
              currentWordIndex = (currentWordIndex + 1) % words.length;
              currentWord = words[currentWordIndex];
              setTimeout(typeNextLetter, typingSpeed);
          }
      }

      typeNextLetter();
  }
</script>
</head>
<body>
    <div class="content-container">
        <div class="nav">
            <img class="topImage" src="Icon.jpg" alt="Simple icon" width="100" height="75">
            <nav ria-label="primaly-navigation"></nav>
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
            <body onload="typingAnimation()">
              <div id="output"></div>

              <div class="container">
                <div class="symbol-grid">
                  <div class="symbol-card html">
                    <h2>&lt;HTML&gt;</h2>
                    
                    <img src="assets/HTML5.png" alt="HTML logo" width="50" height="50">
                  </div>
                  <div class="symbol-card css">
                    <h2>CSS</h2>
                    <img src="assets/CSS-Logo.png" alt="CSS Logo" width="100" height="50">
                  </div>
                  <div class="symbol-card javascript">
                    <h2>JS</h2>
                    <img src="assets/js.png" alt="JS" width="50" height="50">
                  </div>
                  <div class="symbol-card mysql">
                    <h2>MySQL</h2>
                    <img src="assets/MySql.jpg" alt="MySQL" width="50" height="50">
                </div>
                  <div class="symbol-card php" style="text-align: center;">
                    <h2>PHP</h2>
                    <img src="assets/php_PNG23.png" alt="php" width="50" height="50">
                </div>
                </div>
                </div>
          </body>

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
</body>
</html>