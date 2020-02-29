<?php
    $title = "About";
    $content = ' <section>
   
    <img class="mySlides" src="https://images.pexels.com/photos/324028/pexels-photo-324028.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
    style="width:80%">
    <img class="mySlides" src="https://images.pexels.com/photos/867470/pexels-photo-867470.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
    style="width:80%">
    <img class="mySlides" src="https://images.pexels.com/photos/544117/pexels-photo-544117.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
    style="width:80%">
    <img class="mySlides" src="https://images.pexels.com/photos/1254150/pexels-photo-1254150.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
    style="width:80%">
    <img class="mySlides" src="https://images.pexels.com/photos/1150622/pexels-photo-1150622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
    style="width:80%">
    <img class="mySlides" src="https://images.pexels.com/photos/266755/pexels-photo-266755.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
    style="width:80%">
  </section>

  <section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">THE COFFEE SHOP</h2>
  <p class="w3-opacity">We love to make Coffee for you</p>
  <p class="w3-justify">We have created a fictional Coffee website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</section>

<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-flickr"></a>
  <p class="w3-medium" style=" font-size: 15px; font-weight:bold;">
  To send Your selfie with a cup of hot Cooffee  <a href="feedback/index.html" target="_blank" style="text-decoration:none;color:#ff7700;">  Click here.</a>
  </p>
</footer>';

require 'template.php';
?>

<script>
// Automatic Slideshow - change image every 3 seconds
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
  setTimeout(carousel, 3000);
}
</script>
