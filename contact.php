<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact me</title>
    <style>
        body {
    margin: 0;
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
li a:active{
    background-color: #04AA6D;
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
.content {
  box-sizing: border-box;
  padding: 1%;
}
.largecontainer::after {
  content: "";
  clear: both;
  display: table;
  
}
.wordcontainer{
  float: left;
  width: 30%;
  height: 200px;
  padding: 10px;
  background-color: #aeadab;
  margin-right: 3px;
  text-align: center;
  padding-top: 100px;
}
h1{
    text-align: center;
}
i{
    color: white;
    font-size: px;
    
}
.fa.fa-envelope, .fa.fa-phone, .fa.fa-map-marker{
    font-size: 50px;
}
.form-row {
  display: flex;
  justify-content: space-between;
}

.form-group {
  flex: 0.5;
  margin-right: 0.5px; 
}

label {
  display: block;
  margin-bottom: 5px;
}

input {
  width: 50%;
  
}
input[type=text],[type=email], [type=datetime], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.likeFooter {
  display: grid;
  background-color: black;
  border-style: solid black;
  color: whitesmoke;
  padding: 3%;
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
                    <a href="contact.php">Contact me</a>
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
    </div>
    <div class="content">
    <h1>CONTACT ME</h1>
    <div class="largecontainer">
        <div class="wordcontainer">
            <i class="fa fa-map-marker"></i>
            <p>Mzuzu University, P/Bag 202, Luwinga, Mzuzu.</p>
        </div>
        <div class="wordcontainer">
            <i class="fa fa-phone"></i>
            <p>+265882065532</p>
            <p>+265991210903</p>
        </div>
        <div class="wordcontainer">
            <i class="fa fa-envelope"></i>
            <p>joshndeule@gmail.com</p>
        </div>
    </div>
    <hr>
    <h1>WRITE ME A MESSAGE</h1>
    <form action="myPortfolio.php" method="post" id="jform" onsubmit="validateForm()">
     <fieldset>
    <div class="form-row">
        <div class="form-group">
            <label for="name">Name:</label>
            <input  type="text" id="name" name="name" placeholder="Your Name" >
        </div>
        <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" placeholder="Your Surname" >
          </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <label for="subject" >Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" >
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="datetime" name="datetime" placeholder="Date/Time" >
          </div>
    </div>
    <p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="your email" >
    </p>
    <p>
        <label for="message">Your Message:</label>
        <br>
        <textarea type="message" id="message" name="message" cols="100" rows="10" placehoder="Type your message here"></textarea>
    </p>
    </fieldset>
        <button class="button" type="submit" value="submit" name="submit" onclick="myFuction()">Send</button>
</form>
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
       <button class="button" type="submit" > <a href="#">Back To Top</a> </button>
    </p>
    </footer>
    <script>
      document.getElementById("jForm").addEventListener("submit", function(event) {
      event.preventDefault(); 

      
      validateForm();
      });
      function validateForm() {
        var name = document.getElementById("name").value;
        var surname = document.getElementById("surname").value;
        var email = document.getElementById("email").value;
        var datetime = document.getElementById("datetime").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;

        if (name === "" ||surname ==="" || email === "" || datetime === "" || subject === "" || message ==="") {
          alert("Please fill in all fields");
          return false;
        }

        document.getElementById("jForm").submit();
      }
    </script>
</body>
</html>