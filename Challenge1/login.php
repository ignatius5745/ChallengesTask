<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}

  if(isset($_SESSION["full_name"])){
    header("location:index.php");
  }
  require 'config.php';
?>

<!DOCTYPE html>

<html lang="en">
<head></head>
<body>
    
    <form method="POST" action="verify.php">
          <h3>Enter Your Registered Email and Password</h3>
        <div>
            <label for="full_name">Email</label>
            <input type="full_name" name="full_name" id="full_name" required />
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
          </div>
          <input type="submit" value="Log in" /> <input type="reset" value="Reset"/>
        </form>
    
</body>
</html>