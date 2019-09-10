<!-- This page is for implementing something new -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="yellow">
<link rel="icon"sizes="192x192" href="/img/icon.png">
<title>ITU Honeybees</title>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/login.css">
<!--<link rel="stylesheet" type="text/css" href="/css/team.css">-->
<style>

* {
  box-sizing: border-box;
}
/* this is the problem
.rowteam > .columnteam {
  padding: 0 32px 0 0;
}*/
.rowteam:after {
  content: "";
  display: table;
  clear: both;
}
.columnteam {
  float:left;
  width: 25%;
  position: relative;
}
.modalteam {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}
.modal-contentteam {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}
.closeteam {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}
.closeteam:hover,
.closeteam:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mylightbox {
  display: none;
}

.cursor {
  cursor: pointer
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertextteam {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
  img.hover-shadow {
    transition: 0.3s
  }
  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
  }

.text {
  white-space: nowrap;
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}
.columnteam:hover .overlay {
  width: 100%;
}
.skills-container {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-right: 20px;
  line-height: 25px;
  height: 25px;
  color: white;
}
.strength {width: 90%; background-color: #4CAF50;}
.agility {width: 80%; background-color: #2196F3;}
.cuteness {width: 65%; background-color: #f44336;}
.charisma {width: 60%; background-color: #808080;}

</style>
</head>

<body>
<?php include ("navBar.php") ?>

<br> <br> <br>

<section class="w3-container w3-center" stlye="max-width:800px">
<h1 style="text-align:center">Team Members </h1>

<br>
<section style="margin-left: 20%; margin-right: 20%; text-align: center"
  <div class="rowteam">
  <div class="columnteam">
    <img class="columnteam" src="/img/cansup.jpg" style="width:80%; height: 300px; object-fit: cover;">
    <div class="overlay cursor" onclick="openModal();currentSlide(1)">
        <div class="text" style="margin-top: auto">
         <h1>My Skills</h1>
         <p style="margin-bottom:2px; margin-top: -10px">Strength</p>
         <div class="skills-container">
           <div class="skills strength">90%</div>
         </div>
         <p style="margin-bottom:2px; margin-top: 2px;">Agility</p>
         <div class="skills-container">
           <div class="skills agility">80%</div>
         </div>
         <p style="margin-bottom:2px; margin-top: 2px;">Cuteness</p>
         <div class="skills-container">
           <div class="skills cuteness">65%</div>
         </div>
         <p style="margin-bottom:2px; margin-top: 2px;">Charisma</p>
         <div class="skills-container">
           <div class="skills charisma">60%</div>
           </div>
       </div>
      </div>
    <h3 style="text-align:center"> Cansu </h3>
  </div>
  <div class="columnteam">
    <img src="/img/cansupm.jpg" style="width:100%; height: 300px; object-fit: cover;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <h3 style="text-align:center"> Canberk </h3>
  </div>
</div>
</section>

</section>

<div id="teammodal" class="modalteam">
  <span class="closeteam cursor" onclick="closeModal()">&times;</span>
  <div class="modal-contentteam">

    <div class="mylightbox">
      <div class="numbertextteam">1 / 4</div>
      <img src="/img/1.jpg" style="width:100%">
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">2 / 4</div>
      <img src="/img/2.jpg" style="width:100%">
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">3 / 4</div>
      <img src="/img/3.jpg" style="width:100%">
    </div>

    <div class="mylightbox">
      <div class="numbertextteam">4 / 4</div>
      <img src="/img/4.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="captionteam"></p>
    </div>


    <div class="columnteam">
      <img class="demo cursor" src="/img/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="columnteam">
      <img class="demo cursor" src="/img/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="columnteam">
      <img class="demo cursor" src="/img/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="columnteam">
      <img class="demo cursor" src="/img/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
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
