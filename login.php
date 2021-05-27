<?php
  include_once 'header.php';
?>

  <div class="loginBoks">
    <h1>Login her</h1>
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="uid" class="input-box" placeholder="Username/Email" id="txtemail">
      <input type="password" name="pwd" class="input-box" placeholder="Dit Password" id="txtpass">
      <button type="submit" class="login-submit" name="submit">Login</button>
      <p>Har du ikke en bruger? <a href="signup.php">Opret dig</a></p>
    </form>
  </div>

  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Wrong login!</p>";
      }
    }
  ?>


<?php
  include_once 'footer.php';
?>
