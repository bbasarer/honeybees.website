<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="yellow">
<link rel="icon"sizes="192x192" href="/img/icon.png">
<title>Honeybees</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/login.css">
<link rel="stylesheet" type="text/css" href="/css/parallax.css"
</head>

<body>

<!-- Database Connection and login PHP  -->
<?php
include ("main.php");
include ("login.php");
?>

<!-- Navigation -->
<?php
include ("navBar.php");
?>

<!-- Slide Show -->
<div class="w3-content w3-display-container" style="max-width:2000px">

<img class="mySlides w3-animate-opacity" src="/img/crop3.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/img/crop4.jpg" style="width:100%">
<img class="mySlides w3-animate-opacity" src="/img/crop5.jpg" style="width:100%">

<a class="w3-button w3-theme w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
<a class="w3-button w3-theme w3-display-right" onclick="plusDivs(+1)">&#10095;</a>
</div>

<!-- Quidditch Description -->
<section class="w3-container w3-center w3-content w3-white" style="max-width:600px">
  <h2 class="w3-wide">Quidditch</h2>
  <p class="w3-opacity"><i>We love playing</i></p>
  <p class="w3-justify">Quidditch is a wizarding sport played on broomsticks. It is the most popular game and
    most well-known game among wizards and witches, and, according to Rubeus Hagrid, the equivalent to Muggles'
    passion for football.<br><br> The object of the game is to score more points than your opponents. Each goal is
    worth ten points and catching the Snitch is worth one-hundred fifty points. The game ends when the Snitch
    is caught or an agreement is reached between the captains of both teams. Some games can go on for many days
     if the Snitch is not caught (the record, according to Quidditch Through the Ages , is three months).</p>
</section>

<div class="bgimg1">
  <div class="captionp">
  </div>
</div>

<div class="w3-black">
<section class="w3-container w3-center w3-content" style="max-width:800px; font-style: verdana">
  <h2 class="w3-wide" style="color: #fefefe">About Us</h2>
  <p class="w3-justify" style="color: #fefefe">Honeybees are the one of the most successful teams in Turkey as well as the the team who enjoys playing quidditch the most.
    With plenty of awards indifferent championships, Honeybees proved to be more than successful. With sincere and fun team members, Honeybees are loved among all
    quidditch community. <br></p>
</p>
</section>
</div>


<div class="bgimg2">
  <div class="captionp">
  </div>
</div>

  <!-- Footer -->
  <?php
  include ("footer.php");
  ?>


<script>
// Automatic Slideshow
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000);
}
// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
var x = document.getElementsByClassName("mySlides");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length} ;
for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}

showDivs(1);

</script>
</body>

</html>
