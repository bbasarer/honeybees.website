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
<link rel="stylesheet" type="text/css" href="/css/team.css">
</head>

<body>
<?php include ("navBar.php") ?>

<br> <br>
<div class="w3-jumbo w3-center w3-bar w3-black">
<h1> Team Members </h1>
</div>

<br><br><br>
<section class="w3-container w3-center">
<div class="rowteam" style="padding-right: 15%; padding-left: 15%">
  <div class="columnteam">
    <img src="/img/team/yilmaz/yilmaz1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Yılmaz </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/beste/beste1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Beste </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/umutcan/umutcan1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Umutcan </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/cansu/cansu1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Cansu </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/umut/umut1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Umut </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/idil/idil1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(41)" class="hover-shadow cursor">
    <h3 style="text-align:center"> İdil </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/egemen/egemen1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(47)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Egemen </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/cuneyt/cuneyt1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(52)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Cüneyt </h3>
  </div>
  <!--<div class="columnteam">
    <img src="/img/team/cansu/cansu1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Ozan </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/cansu/cansu1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Erşan </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/cansu/cansu1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Emre </h3>
  </div>
  <div class="columnteam">
    <img src="/img/team/cansu/cansu1.jpg" style="width:100%; height: 250px; object-fit: cover;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Haluk </h3>
  </div>-->
</div>
<br>
<br>

</section>

<div id="teammodal" class="modalteam" style="background-color: rgba(0,0,0,0.4)">
  <span class="closeteam cursor" onclick="closeModal()">&times;</span>
  <div class="modal-contentteam">

<!-- Yilmaz -->
    <div class="mylightbox">
      <div class="numbertextteam">1 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">2 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">3 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">4 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">5 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">6 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz6.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">7 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz7.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">8 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz8.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">9 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz9.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">10 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz10.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">11 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz11.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">12 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz12.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">13 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz13.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">14 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz14.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">15 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz15.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">16 / 16</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/yilmaz/yilmaz16.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("yilmaz.php") ?>
    </div>
    </div>

<!-- Beste -->
    <div class="mylightbox">
      <div class="numbertextteam">1 / 5</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/beste/beste1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("beste.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">2 / 5</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/beste/beste2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("beste.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">3 / 5</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/beste/beste3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("beste.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">4 / 5</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/beste/beste4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("beste.php") ?>
    </div>
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">5 / 5</div>
      <div style="max-width: 1200px" class="clearfix">
      <img src="/img/team/beste/beste5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
      <?php include ("beste.php") ?>
    </div>
    </div>

    <!-- Umutcan -->
        <div class="mylightbox">
          <div class="numbertextteam">1 / 2</div>
          <div style="max-width: 1200px" class="clearfix">
          <img src="/img/team/umutcan/umutcan1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
          <?php include ("umutcan.php") ?>
        </div>
        </div>

        <div class="mylightbox">
          <div class="numbertextteam">2 / 2</div>
          <div style="max-width: 1200px" class="clearfix">
          <img src="/img/team/umutcan/umutcan2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
          <?php include ("umutcan.php") ?>
        </div>
        </div>

        <!-- Cansu -->
            <div class="mylightbox">
              <div class="numbertextteam">1 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/cansu/cansu1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("cansu.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">2 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/cansu/cansu2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("cansu.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">3 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/cansu/cansu3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("cansu.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">4 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/cansu/cansu4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("cansu.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">5 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/cansu/cansu5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("cansu.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">6 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/cansu/cansu6.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("cansu.php") ?>
            </div>
            </div>

        <!-- Umut -->
            <div class="mylightbox">
              <div class="numbertextteam">1 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">2 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">3 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">4 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">5 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">6 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut6.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">7 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut7.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">8 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut8.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">9 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut9.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">10 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut10.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">11 / 11</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/umut/umut11.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("umut.php") ?>
            </div>
            </div>

        <!-- İdil -->
            <div class="mylightbox">
              <div class="numbertextteam">1 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">2 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">3 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">4 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">5 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">6 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil6.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">7 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil7.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">8 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil8.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">9 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil9.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">10 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil10.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">11 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil11.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">12 / 12</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/idil/idil12.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("idil.php") ?>
            </div>
            </div>

        <!-- Egemen -->
            <div class="mylightbox">
              <div class="numbertextteam">1 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/egemen/egemen1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("egemen.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">2 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/egemen/egemen2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("egemen.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">3 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/egemen/egemen3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("egemen.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">4 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/egemen/egemen4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("egemen.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">5 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/egemen/egemen5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("egemen.php") ?>
            </div>
            </div>

            <div class="mylightbox">
              <div class="numbertextteam">6 / 6</div>
              <div style="max-width: 1200px" class="clearfix">
              <img src="/img/team/egemen/egemen6.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
              <?php include ("egemen.php") ?>
            </div>
            </div>

          <!-- Cuneyt -->
              <div class="mylightbox">
                <div class="numbertextteam">1 / 6</div>
                <div style="max-width: 1200px" class="clearfix">
                <img src="/img/team/cuneyt/cuneyt1.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
                <?php include ("cuneyt.php") ?>
              </div>
              </div>

              <div class="mylightbox">
                <div class="numbertextteam">2 / 6</div>
                <div style="max-width: 1200px" class="clearfix">
                <img src="/img/team/cuneyt/cuneyt2.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
                <?php include ("cuneyt.php") ?>
              </div>
              </div>

              <div class="mylightbox">
                <div class="numbertextteam">3 / 6</div>
                <div style="max-width: 1200px" class="clearfix">
                <img src="/img/team/cuneyt/cuneyt3.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
                <?php include ("cuneyt.php") ?>
              </div>
              </div>

              <div class="mylightbox">
                <div class="numbertextteam">4 / 6</div>
                <div style="max-width: 1200px" class="clearfix">
                <img src="/img/team/cuneyt/cuneyt4.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
                <?php include ("cuneyt.php") ?>
              </div>
              </div>

              <div class="mylightbox">
                <div class="numbertextteam">5 / 6</div>
                <div style="max-width: 1200px" class="clearfix">
                <img src="/img/team/cuneyt/cuneyt5.jpg" style="height: 600px; width: 50%; object-fit: cover; border: 2px solid black; float: left;">
                <?php include ("cuneyt.php") ?>
              </div>
              </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="captionteam"></p>
    </div>
  </div>

<div class="modal-contentteam">
  <div style="padding: 10px 10px" class="clearfix">
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(1)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(2)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(3)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(4)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(5)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz6.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(6)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz7.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(7)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz8.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(8)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz9.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(9)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz10.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(10)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz11.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(11)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz12.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(12)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz13.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(13)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz14.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(14)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz15.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(15)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/yilmaz/yilmaz16.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(16)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/beste/beste1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(17)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/beste/beste2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(18)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/beste/beste3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(19)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/beste/beste4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(20)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/beste/beste5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(21)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umutcan/umutcan1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(22)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umutcan/umutcan2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(23)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cansu/cansu1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(24)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cansu/cansu2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(25)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cansu/cansu3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(26)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cansu/cansu4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(27)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cansu/cansu5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(28)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cansu/cansu6.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(29)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(30)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(31)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(32)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(33)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(34)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut6.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(35)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut7.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(36)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut8.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(37)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut9.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(38)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut10.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(39)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/umut/umut11.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(40)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(41)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(42)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(43)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(44)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(45)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil6.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(46)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil7.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(47)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil8.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(48)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil9.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(49)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil10.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(50)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil11.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(51)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/idil/idil12.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(52)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/egemen/egemen1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(53)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/egemen/egemen2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(54)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/egemen/egemen3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(55)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/egemen/egemen4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(56)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/egemen/egemen5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(57)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/egemen/egemen6.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(58)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cuneyt/cuneyt1.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(59)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cuneyt/cuneyt2.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(60)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cuneyt/cuneyt3.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(61)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cuneyt/cuneyt4.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(62)">
    </div>
    <div class="columnteam" style="padding: 8px 8px">
      <img class="demo cursor" src="/img/team/cuneyt/cuneyt5.jpg" style="height: 200px; width: 100%; object-fit: cover" onclick="currentSlide(63)">
    </div>
  </div>
</div>
</div>


<?php include ("footer.php") ?>

<script>
function openModal() {
  document.getElementById('teammodal').style.display = "block";
}

function closeModal() {
  document.getElementById('teammodal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mylightbox");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("captionteam");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
  var modallteam = document.getElementById("teammodal");
  var modal = document.getElementById("log1n");

  window.onclick = function(event) {
    if (event.target == modallteam) {
        modallteam.style.display = "none";
    }else if (event.target == modal) {
        modal.style.display ="none";
    }

  }

</script>


</body>

</html>
