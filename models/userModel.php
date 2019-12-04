<?php
  class User{
  	private $conn;
  	private $table='users';
    

    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $mobilenumber;
    public $hashed_pwd;
    public $salt;
    public $created_at;

  
  	public function __construct($db){
  		$this->conn=$db;
  		  	} 

    public function Register(){
       $query='INSERT INTO '.$this->table.'
      SET
        firstname = :firstname,
        lastname= :lastname,
        email= :email,
        hashed_pwd= :hashed_pwd,
        salt= :salt,
        mobilenumber= :mobilenumber';

         $stmt= $this->conn->prepare($query);

      $this->firstname=htmlspecialchars(strip_tags($this->firstname));
      $this->lastname=htmlspecialchars(strip_tags($this->lastname));
      $this->email=htmlspecialchars(strip_tags($this->email));
      $this->hashed_pwd=htmlspecialchars(strip_tags($this->hashed_pwd));
      $this->salt=htmlspecialchars(strip_tags($this->salt));
      $this->mobilenumber=htmlspecialchars(strip_tags($this->mobilenumber));

      $stmt->bindparam(':firstname', $this->firstname);
      $stmt->bindparam(':lastname', $this->lastname);
      $stmt->bindparam(':email', $this->email);
      $stmt->bindparam(':hashed_pwd', $this->hashed_pwd);
      $stmt->bindparam(':salt', $this->salt);
      $stmt->bindparam(':mobilenumber', $this->mobilenumber);

       if($stmt->execute()){
        return true;
      }
      
        printf("Error: %s.\n", $stmt->error);
    }
    

    }

  
 
?>