<?php
  include_once 'config/database.php';
  include_once 'models/userModel.php';



   class UserController{

   	  public function generateSalt($max = 64) {
			  $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
			  $i = 0;
			  $salt = "";
				while ($i < $max) {
				    $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
				    $i++;
				}
				return $salt;
			}

	  public function login($email,$password){
	  	@$status;

          $database= new Database();
          $db = $database->connect();
		  $user= new User($db);
		  $user->email=$email;
		  $user->password=$password;
		   $result= $user->userexists();

 		  if(!$result){
 		  	 $status= array('message'=>'This email has not been registered, Signup Now');
		    return $status;
 		  }

 		  $result= $user->login();

 		$hashed_pwd=$result[0]['hashed_pwd'];
 		$salt=$result[0]['salt'];

 		$check_pwd=$salt.$password;
 		$check_hash=hash('sha512',$check_pwd);
 		
 		  if($check_hash == $hashed_pwd){
 		  	$status= array('message'=>'Login was Successful');
		    return $status;
 		  }
 		  else{
 		  	$status= array('message'=>'Incorrect Password');
		    return $status;
 		  }

	  }
       
      public function register($firstname, $lastname, $email,$password, $mobilenumber){
 		 @$status;

          $database= new Database();
          $db = $database->connect();
		  $user= new User($db);

		  $user->email=$email;
 		  $result= $user->userexists();

 		  if($result){
 		  	 $status= array('message'=>'This email has already been registered, Login or Try another email');
		    return $status;
 		  }

       	 $user_salt = $this->generateSalt(); // Generates a salt
         $combo = $user_salt.$password; // Appending user password to the salt 
		 $hashed_pwd = hash('sha512',$combo); // Using SHA512 to hash the salt+password combo string
        

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