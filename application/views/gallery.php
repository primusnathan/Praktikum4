<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?=base_url()?>asset/gallery.css">
<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
</head>
<body>

<header> 
<ul>
<span id="logo" style="font-family: 'Rock Salt', cursive;margin-top:-20px;">B2Bike</span>
  <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
  <li><a class="active"href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfile</a></li>
  <li><a href="<?=base_url()?>index.php/welcome/utama">Home</a></li>
</ul></header>
<p style="font-size:40px;margin-top:100px;margin-left:530px;">Koleksi Sepeda Gowes Malang</p>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="<?=base_url()?>asset/satu.jpg" style="width:100%">
  <div class="text">Sepeda Balap</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="<?=base_url()?>asset/dua.jpg" style="width:100%">
  <div class="text">Sepeda Gunung</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="<?=base_url()?>asset/tiga.jpg" style="width:100%">
  <div class="text">Sepeda BMX</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="<?=base_url()?>asset/empat.jpg" style="width:100%">
  <div class="text">Sepeda Anak-anak</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<script>
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
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>

</body>
</html> 
