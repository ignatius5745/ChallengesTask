<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$name = $_POST["full_name"];
$password = $_POST["password"];
$flag = 'true';


$result = $mysqli->query('SELECT full_name,password,role from users');

if($result === FALSE){
  die(mysqli_error($mysqli));
  echo"SQL ERROR";
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->full_name === $name && $obj->password === $password) {

      $_SESSION['full_name'] = $obj->full_name;
      $_SESSION['role'] = $obj->role;
    echo '<h1>Success Login!</h1>';
    header ("location:index.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h1>Invalid Login! </h1>';
  header ("location:login.php");
}

?>
