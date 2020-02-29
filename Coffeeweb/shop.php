<?php
    $title = "Shop";
    $content ='<form action="shop.php" method="POST">
    <div id="search"><input type=search placeholder="Type here!"></div>
    <div id="Economy" class="tabcontent">
      <h3>Coffee under 5$</h3>
      <input type="checkbox" checked="checked">Cafe au Lait.
      <input type="checkbox">Caffe Americano.
      <input type="checkbox">Galao.
    </div>
    <button type="submit" class="bot-primary">Add to cart</button>
    
    <div id="premium" class="tabcontent">
      <h3>Coffee under 10$</h3>
      <input type="checkbox"checked="checked">Peppermint White Chocolate Mocha.
      <input type="checkbox">Short Macchiato.
      <input type="checkbox">Long Macchiato.
    </div>
    <button type="submit" class="bot-primary">Add to cart</button>
    
    <div id="bussiness" class="tabcontent">
      <h3>Coffee under 20$</h3>
      <input type="checkbox"checked="checked"> piccolo latte.
      <input type="checkbox"> mocha.
      <input type="checkbox">affogato.
      <input type="checkbox">double espresso aka “Doppio”.
      <input type="checkbox">ristretto.
    </div>
    <button type="submit" class="bot-primary">Add to cart</button>
    </form>';
require 'template.php';
?>