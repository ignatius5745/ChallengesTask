<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
  include ('config.php');

  $db = mysqli_connect("localhost", "root", "", "challenges");


  if (isset($_POST['submit'])) {
    $name = $_POST["form_name"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $description = $_POST["description"];
    $reason = $_POST["reason"];
    $rand = rand(0,1000000000);
    $date = date('Y-m-d H:i:s');
    $file1 = $_FILES["file1"]["name"];
    $file1 = $_FILES["file2"]["name"];
    $file1verify = $_POST["verify1"] ; 
    $file2verify = $_POST["verify2"] ;
    $users = $_SESSION['full_name'];

      $sql = "INSERT INTO formsdetail (`form_id`, `name` `gender`,`Address`, `country`, `file1`, `file2`, `Description`, `Reason`, `file1verify`, `file2verify`) VALUES('$rand', '$name', $gender', '$address', '$country', '$file1', '$file2', '$description', '$reason', '$file1verify', '$file2verify')";

      mysqli_query($db, $sql);
      
      $sql2 = "INSERT INTO forms (`form_id`, `owner`, `Date`, `Status`) VALUES ('$rand', '$users', '$date', 'Pending')"; 
      
      mysqli_query($db, $sql2);
      header("Location: index.php");
    
  }

?>

<DOCTYPE! html>
    <html lan="en">

    <head>
    </head>

    <body>
        <form method="POST" action="form.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Section A</legend>
                <label for="name">Name: </label>
                <input type="text" name ="form_name"  id="form_name">
                <label for="gender">Gender: </label>
                <input type="radio" name ="gender"  id="gender" value="M">M
                <input type="radio" name ="gender"  id="gender" value="F">F<br>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address"><br>
                <label for="country">Country: </label>
                <select>
                  <option value="China">China</option>
                   <option value="Indonesia">Indonesia</option>                   
                    <option value="Malaysia">Malaysia</option>
                   <option value="Thailand">Thailand</option>
                   <option value="Singapore">Singapore</option>
                   <option value="Brunei">Brunei</option>
                </select>
            </fieldset>

            <fieldset>
                <legend>Section B</legend>
                <label for="file1">File 1:</label>
                <input type="file" name="file1" id="file1">
                <label for="verify1">Verified:</label>
                <input type="checkbox" name="verify1" disabled><br>
                <label for="file2">File 2:</label>
                <input type="file" name="file2" id="file2">
                <label for="verify2">Verified:</label>
                <input type="checkbox" name="verify2" disabled>
            </fieldset>

            <fieldset>
                <legend>Section C</legend>
                <label for="description">Description: </label>
                <textarea name="description" id="description"></textarea>
            </fieldset>

            <fieldset>
                <legend>Section D</legend>
                <label for="reason">Reason: </label>
                <textarea name="reason" id="description"></textarea><br>
                <label for = "approved">Approved:</label>
                <input type="checkbox" name="approve" id="approve" value ="0" disabled>
                <label for = "notapproved">Not Approved:</label>
                <input type="checkbox" name="approve" id="approve" value="1" disabled>
            </fieldset>
            <input type="submit" name="submit">
        </form>

    </body>


    </html>
