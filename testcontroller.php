<?php
   include_once 'controllers/usercontroller.php';
   
   $firstname= "Kazeem";
   $lastname="David";
   $email="davonkaze1@gmail.com";
   $password="davonjagah.";
   $mobilenumber="0578588981";

   $newuser= new UserController;


   $status=$newuser->register($firstname, $lastname, $email,$password, $mobilenumber);
   echo $status['message'];


?>