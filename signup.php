<?php
  include_once 'header.php';
?>
  <div class="loginBoks">
      <h1>Opret dig her</h1>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" class="input-box" name="name" placeholder="Dit fulde navn">
        <input type="email" class="input-box" name="email" placeholder="Din email">
        <input type="text" class="input-box" name="uid" placeholder="Dit username">
        <input type="password" class="input-box" name="pwd" placeholder="Dit password">
        <input type="password" class="input-box" name="pwdrepeat" placeholder="Gentag password">
        <p><span><input type="checkbox" id="check" onclick="signupKnapFunction()"></span> Jeg acceptere betingelsesvilkårene</p>
        <div id="hbOption">
          <button type="submit" class="signup-submit" id="signupKnap" name="submit">Opret dig</button>
        </div>
      </form>
  </div>

<script>
  var x = document.getElementById("hbOption");
  x.style.display = "none";

  function signupKnapFunction() {
    var x = document.getElementById("hbOption");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  </script>

  <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<div class='errorM'>Fyld alle felter ud!</div>";
      }
      else if ($_GET["error"] == "invaliduid") {
        echo "<div class='errorM'>Vælg et ordentligt brugernavn!</div>";
      }
      else if ($_GET["error"] == "invalidemail") {
        echo "<div class='errorM'>Vælg en ordentligt email!</div>";
      }
      else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<div class='errorM'>Adgangskoder stemmer ikke overens!</div>";
      }
      else if ($_GET["error"] == "stmtfailed") {
        echo "<div class='errorM'>Noget gik galt!</div>";
      }
      else if ($_GET["error"] == "usernametaken") {
        echo "<div class='errorM'>Brugernavn allerede i brug!</div>";
      }
      else if ($_GET["error"] == "none") {
        echo "<div class='errorM'>Du er nu oprettet!</div></p>";
      }
    }
  ?>


<?php
  include_once 'footer.php';
?>
