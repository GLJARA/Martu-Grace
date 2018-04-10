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
    <?php require './PHP/partials/header.php' ?>
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
    <?php require './PHP/partials/footer.php' ?>
    </div>
  </div>
</body>
</html>
