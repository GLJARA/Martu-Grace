<?php require __DIR__ . '/PHP/helpers/globalDef.controller.php';
$location = 'Location: ' . $localBase . 'PHP/controllers/signup.controller.php';
 ?>
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
    <?php require './PHP/partials/header.php'; ?>
    <div class="principal">
      <?php
      $msgError = 0; //seteo variable de error
      if (isset($_POST['signup'])) { //cada vez que apreto el boton valido
        // si se pulso el boton de signup entonces valida
        require '../TI/PHP/controllers/signup_validation.php';
        if ($msgError == 0 ) { // si no hay erorres se va
// antes de  salir hay que revisaar todas  validaciones
//          header($location); //location la arma arriba y sale al controller
        }
      };
      ?>
      <form class="signup" action=" " enctype="multipart/form-data" method="post">
        <div class="group">
          <fieldset class="subgroup">
            <label for="name" class="label">Full Name: </label>
            <input type="text" class="form-control" id="name" name="name" min:"80" max="80">
            <br>
            <label for="email" class="label" >Email *:</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $valor = (isset($_POST['email'])) ? $_POST['email'] : '' ; ?>">
            <?php if ($msgError == 1): ?>
            <p class="error" > <?php echo $error[$msgError]; ?></p>
          <?php endif ; ?>
          <br/>
        </fieldset>
      </div>
      <div class="group">
        <fieldset class="subgroup">
          <label for="password" class="label" >Password *:</label>
          <input type="password" class="form-control" name="password" id="password">
          <br>
          <label for="passConf" class="label" >Confirm Password *:</label><br/>
          <input type="password"  class="form-control" name="passConf" id="passConf" >
        </fieldset>
      </div>
      <div class="signup_but">
        <button class="btn-confirm" type="submit" name="signup">Sign Up</button>
      </div>
    </form>
    </div>
    <?php require './PHP/partials/footer.php' ?>
  </div>

<body>
</html>
