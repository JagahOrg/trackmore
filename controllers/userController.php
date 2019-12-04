<?php
  include_once 'config/database.php';
  include_once 'models/userModel.php';



   class UserController{

   	  function generateSalt($max = 64) {
			  $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
			  $i = 0;
			  $salt = "";
				while ($i < $max) {
				    $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
				    $i++;
				}
				return $salt;
			}

       
       function register($firstname, $lastname, $email,$password, $mobilenumber){
 		 @$status;
 		 // $this->checkemail();//Checks if email exists

       	 $user_salt = $this->generateSalt(); // Generates a salt
         $combo = $user_salt . $password; // Appending user password to the salt 
		 $hashed_pwd = hash('sha512',$combo); // Using SHA512 to hash the salt+password combo string
         $database= new Database();
      $db = $database->connect();
		 $user= new User($db);

		 $user->firstname=$firstname;
		 $user->lastname=$lastname;
		 $user->email=$email;
		 $user->hashed_pwd=$hashed_pwd;
		 $user->salt=$user_salt;
		 $user->mobilenumber=$mobilenumber;

		 if($user->register()){
           $status= array('message'=>'Registration Successful');
		 }
		 else{
		 	 $status= array('message'=>'Registration Not Successful');
		 }
		 return $status;
       } 

       
	   }

?>