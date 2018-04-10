<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/new-style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <title>Sign Up</title>
</head>
<body>
  <div class="container">
    <header class="main-header">
      <div class="logo-container">
        <a href="index.php">
          <img class="logo" src="img/JustPeople.jpg" alt="">
        </a>
      </div>
      <nav class="main-nav">
        <ul>
          <li> <a href="./faq.php">FAQ</a></li>
        </ul>
        <ul>
          <li> <a href="./login.php">Log In</a></li>
          <li> <a href="./singup.php">Sign Up</a></li>
        </ul>
      </nav>
      <div class="title">
        <h1>Sign Up</h1>
      </div>
    </header>
    <div class="principal">
      <form class="signup" action="../TI/PHP/signup.controller.php" enctype="multipart/form-data" method="post">
        <div class="group">
          <div class="subgroup">
            <label for="name" class="label">Full Name: </label>
            <input type="text" class="form-control" id="name" name="name">
            <br>
          </div>
          <div class="subgender">
            <label for = "genero" class="label" > Gender: </label>
            <input class="subgender2" type = "radio" name = "gender" value="Female"> Female
            <input class="subgender2" type = "radio" name = "gender" value="Male" > Male
            <br>
        </div>
        <div class="subgroup">
          <label for='email' class="label" >Email *:</label>
          <input type='email' class="form-control" name='email' id='email' value='' maxlength="50" />
          <br/>
        </div>
      </div>
      <div class="group">
        <div class="subgroup2">
          <label for='password' class="label" >Password *:</label>
          <input type='password' class="form-control" name='password' id='password' maxlength="50" />
          <br>
          <label for='passConf' class="label" >Confirm Password *:</label><br/>
          <input type='password'  class="form-control" name='passConf' id='passConf' maxlength="50" />
        </div>
      </div>

      <div class="signup_but">
        <button class="btn-confirm" type="submit" name="button">Continue</button>
      </div>
    </form>
    </div>
  <footer>
    <nav class="footer-nav">
      <ul>
        <li>© Copyright 2018<li>
      </ul>
      <ul>
        <li>
          <a href="https://www.facebook.com/">
            <i class="fab fa-facebook"> </i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/">
            <i class="fab fa-twitter-square"></i>
          </a>
        </li>
          <li>
            <a href="https://www.instagram.com">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="https://www.google.com.ar">
              <i class="fab fa-google-plus-square"></i>
            </a>
          </li>
      </ul>
    </nav>
  </footer>

  </div>



</body>
</html>
