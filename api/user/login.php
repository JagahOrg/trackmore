<?php
 header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

  include_once '../../controllers/usercontroller.php';

  $data= json_decode(file_get_contents("php://input"));


  $newuser= new UserController;

   $status=$newuser->login($data->email,$data->password);
   echo json_encode($status);
  ?>