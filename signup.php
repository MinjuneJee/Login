<?php
  include_once 'header.php';

 ?>
 <center>


   <section class="signup-form">
     <h2>Sign Up</h2>
     <div class="signup-form-form">
       <form class="sff-form" action="inc/signup.inc.php" method="post">
         <input type="text" name="first_name" placeholder="First name...">
         <input type="text" name="last_name" placeholder="Last name...">
         <input type="text" name="email" placeholder="Email...">
         <input type="text" name="uid" placeholder="Username...">
         <input type="password" name="pwd" placeholder="Password...">
         <input type="password" name="pwdrepeat" placeholder="Repeat password...">
         <button type="submit" name="submit">Sign up</button>
       </form>
     </div>
 </center>


<?php
  include_once 'footder.php';

 ?>
