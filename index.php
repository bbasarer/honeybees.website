<!DOCTYPE html>
<html lang="en">
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bgimg {
    background-image: url('/img/background1.jpg');
    height: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    font-family: "Courier New", Courier, monospace;
    font-size: 25px;
}

.topleft {
    position: absolute;
    top: 16px;
    left: 16px;
    border-radius:50%;
}

.bottomright {
  position: absolute;
  left: 50%;
  bottom: 100px;
  transform: translate(-50%, -50%);
  text-align: center;
}
.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

hr {
    margin: auto;
    width: 40%;
}
</style>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="black">
  <link rel="icon"sizes="192x192" href="/img/icon.png">
  <title>Honeybees</title>
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/login.css">
  <link rel="stylesheet" type="text/css" href="/css/team.css">
  </head>
<style>
p {
  text-align: center;
  font-size: 60px;
}
</style>
</head>
<body>
  <div class="bgimg">
    <img class="topleft" src="/img/bee.png" width="200" height="200">

    <div class="middle">
      <h1 style="font-size:70px">Under Construction</h1>
      <hr>
       <h4 id="demo" style="font-size:40px"></h4>
    </div>
    <div class="bottomright">
      <p class="background-color: w3-light-grey" style="font-size: 30px">For Demo Version of the Site Click the Link Below</p>
    <a href="http://honeybees.tevitol.org/default.php" class="w3-button background-color: w3-black" style="text-align: center;"> HomePage </a>
    </div>
  </div>

<!--  <p id="demo"></p>

  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("Apr 10, 2018 00:00:00").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      // If the count down is over, write some text
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
      }
  }, 1000);
  </script>
-->
  </body>
  </html>
