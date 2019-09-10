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
</head>

<body>
<?php include ("navBar.php") ?>
<br> <br>

<div class="w3-jumbo w3-center w3-bar w3-black">
<h1> Contact Us </h1>
</div>

<div id="map" style="width:100%;height:500px"></div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(41.106533, 29.025876);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<div class="w3-container w3-padding-64 w3-light-grey">

	<div class="w3-half">
    <h4>Contact Our Team </h4>
		<ul>
			<li> <strong>Honeybees </strong><br />
			   Telephone: +90 534 790 6945<br />
				 E-mail: <a style=""href="mailto:yilmazbasarer@gmail.com">yilmazbasarer@gmail.com</a><br />
			   Website: <a href="index.html">honeybees.tevitol.org</a> </li>
		</ul>
  </div>
  <div class="w3-half">
  <h4>Adress</h4>
    <ul>
      <li> <strong>Istanbul Technical University Ayazaga</strong><br />
          Reşitpaşa Mahallesi, 34467 Sarıyer/İstanbul
    </ul>
  </div>

</div>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQpglumpolLd6KBjvhqijogfjnTabZ7o&callback=myMap"></script>

<?php include ("footer.php") ?>



</body>

</html>
