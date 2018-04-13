<header class="main-header">
  <div class="logo-container">
    <a href="index.php">
      <img class="logo" src="img/JustPeople.jpg" alt="">
    </a>
  </div>
  <nav class="main-nav">
    <ul>
      <li> <a href="./faq.php?page=FAQ">FAQ</a></li>
    </ul>
    <ul>
      <li> <a href="./login.php?page=LOGIN">Log In</a></li>
      <li> <a href="./singup.php?page=SIGNUP">Sign Up</a></li>
    </ul>
  </nav>
  <div class="title">
    <?php if (isset($_GET['page'])) {
      echo "<h1>".$_GET['page']."</h1>"; } ?>
  </div>
</header>
