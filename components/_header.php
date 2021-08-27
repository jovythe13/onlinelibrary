<?php require('_nodirectaccess.php'); ?>
<script>
  // to avoid FOUC (Flash Of Unstyled Content) on the Firefox site: https://bugzilla.mozilla.org/show_bug.cgi?id=1404468
  0
</script>
<header>
  <div class="site-identity">
    <a href="home.php"><img src="assets/logo.jpeg" width="82px" height="80px" alt="logo"></a>
    <h1><?php require('components/_title.php'); ?></h1>
  </div>
  <nav class="site-navigation">
    <ul class="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="browse.php">Browse</a></li>
      <?php if (!empty($_SESSION['email']) || isset($_SESSION['email'])) { ?>
        <li>
          <form action="logout.php" method="post">
            <button type="submit" name="logout">Log Out</button>
          </form>
        </li>
      <?php } else { ?>
        <li><a href="signin.php">Login</a></li>
        <li><a href="signup.php">Register</a></li>
      <?php } ?>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>
</header>