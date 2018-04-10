<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/new-style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <title>Login - JustPeople</title>
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
        <h1>Log In</h1>
      </div>
      </header>
    <div class="principal">
      <div class="bannerContainer2">
        <img class="bannerSmall" src="./img/BannerSmall.jpg" alt="">
        <img class="keylogin" src="./img/keys.jpg" alt="">
      </div>
      <form class="login">
        <div class="login_fields">
          <div class="line">
            <label for="username" class="label">User name: </label>
            <input type="text" class="form-control" id="username" placeholder="Enter an username">
          </div>
          <div class="line">
            <label for="password" class="label">Password: </label>
            <input type="password" class="form-control" id="password" placeholder="Enter a password">
          </div>
          <div class="line2">
            <label for="remember" class="label"><p class="p4">Remember me: </a></label>
            <input type="checkbox" class="form-control" id="remember" >
          </div>
        </div>
        <div class="login_but">
          <button class="btn-confirm" type="button" name="button">Let me in</button>
          <button class="btn-confirm" type="button" name="button">Forgot your password?</button>
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
  </div>
</body>
</html>
