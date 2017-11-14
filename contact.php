<?php
require_once __DIR__.'../inc/config.php';

require_once __DIR__.'../header.php';
 ?>

 <div class="illu">
   <img src="img/cv.png" alt="cv">
 </div>
 <div class="contact">
  <form action="contactPHP.php" method="post">
  Nom:<br>
  <input type="text" name="firstname" placeholder="Dupont"><br>
  Prénom:<br>
  <input type="text" name="lastname" placeholder="Jean"><br>
  E-mail:<br>
  <input  type="text" name="mail" placeholder="email@mail.com"> <br>
  Sujet:<br>
  <input type="text" name="subject" placeholder="Optionnel"><br>
  Votre Message :<br>
  <textarea id="subject" name="subject" style="width:400px" placeholder="Votre Message"></textarea>
  <br>
  <input id="button" type="submit" value="Envoyer">
 </form>
</div>

<div class="coordonees">
  <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2574.347714340067!2d6.476632526350784!3d49.81712961923593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479561b61b805f1b%3A0x2f725afe7ccc9009!2s17+Am+Flouer%2C+6587+Steinheim!5e0!3m2!1sfr!2slu!4v1510667400501"
  width="530" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
  +325 / 621 740 573<br>
  +32 / 473 45 95 21<br>
  <a href="https://www.linkedin.com/in/laureen-fran%C3%A7ois-890601147/"> >LinkedIn< </a>
</div>

 <?php
 require_once __DIR__.'../footer.php';
 ?>
