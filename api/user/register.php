 <?php
 header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

  include_once '../../controllers/usercontroller.php';

  $data= json_decode(file_get_contents("php://input"));


  $newuser= new UserController;

   $status=$newuser->register($data->firstname, $data->lastname, $data->email,$data->password, $data->mobilenumber);
   echo json_encode($status);
  ?>