<?php
  include_once "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
    <h1>Temp site for redigering i HTML/JAVA</h1>

<p>1</p>
<div class="feedPost">
  <form class="input-box-feed" action="inkludere/feedpost.ink.php" method="post">
   <input type="text" name="postText" class="postClass" placeholder="Hvad har du på hjertet? <3" id="txtPost">

<p><span><input type="checkbox" id="dateCheck" onclick="datoOptionFunction()"></span>Dato?</p>
<div id="datoOption">
  <label>Dato</label>
  <input type="date" class="date-input-box" name="aftaleDate">
  <input type="time" class="time-input-box" name="timeStart">
  <input type="time" class="time-input-box" name="dateEnd">
</form>
</div>
<script>
var x = document.getElementById("datoOption");
x.style.display = "none";

function datoOptionFunction() {
  var x = document.getElementById("datoOption");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<button type="submit" class="post-submit" name="post-submit">Slå op</button>
</div>

       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
