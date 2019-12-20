<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
$id = $_GET['form_id'];
  include ('config.php');
    $result = $mysqli->query("SELECT * from formsdetail where form_id = '$id'");
    if($result) {
    while($obj = $result->fetch_object()) {
  
  $name = $obj->name;
  $gender = $obj->gender;
  $address = $obj->Address;
  $country = $obj->country;
  $file1 = $obj->file1;
  $file2 = $obj->file2;
  $description = $obj->Description;
  $reason = $obj->Reason;
    }
    }
?>

<DOCTYPE! html>
    <html lan="en">

    <head>
    </head>

    <body>
        <?php if($_SESSION['role'] == 'employee')
        {   
        ?>
        <form method="GET" action="saveform.php">
            <fieldset>
                <legend>Section A</legend>
                <?php
                echo "<label for='name'>Name: </label>";
                echo "<input type='text' name ='name'  id='name' value = '$name'>";
                echo "<label for='gender'>Gender: </label>";
                echo "<input type='radio' name ='gender'  id='gender' value='M'"; if($gender=="M"){echo "checked";} echo">M";
                echo "<input type='radio' name ='gender'  id='gender' value='F'"; if($gender=="F"){echo "checked";} echo">F<br>";
                echo "<label for='address'>Address:</label>";
                echo "<input type='text' name='address' id='address' value='$address'><br>";
                echo "<label for='country'>Country: </label>";
                echo "<select name='country'>";
                echo"<option value='China'"; if($country=="China"){echo "selected";} echo">China</option>";
                echo"<option value='Indonesia'"; if($country=="Indonesia"){echo                 "selected";} echo">Indonesia</option>";                   
                echo"<option value='Malaysia'"; if($country=="Malaysia"){echo "selected";} echo">Malaysia</option>";
                echo"<option value='Thailand'"; if($country=="Thailand"){echo "selected";} echo">Thailand</option>";
                echo"<option value='Singapore'"; if($country=="China"){echo "selected";} echo">Singapore</option>";
                echo"<option value='Brunei'"; if($country=="Brunei"){echo "selected";} echo">Brunei</option>";
                echo"</select>" ;
                    ?>
            <fieldset>
                <legend>Section B</legend>
                <label for="file1">File 1:</label>
                <?php 
                echo"<input type='file' name='file1' id='file1' value='$file1'>" ;
                echo"<label for='verify1'>Verified:</label>";
                echo"<input type='checkbox' name='verify1' disabled><br>";
                echo"<label for='file2'>File 2:</label>";
                echo"<input type='file' name='file2' id='file2' value='$file2'>"
            ?>
                <label for="verify1">Verified:</label>
                <input type="checkbox" name="verify1" disabled>
            </fieldset>

            <fieldset>
                <legend>Section C</legend>
                <label for="name">Description: </label>
                <?php 
                    echo"<textarea name='description'>$description</textarea>"; 
                ?>
            </fieldset>

            <fieldset>
                <legend>Section D</legend>
                <label for="name">Reason: </label>
                <?php echo"<textarea name='reason'>$reason</textarea><br>"; ?>
                <label for = "approved">Approved:</label>
                <input type="checkbox" name="approved" id="approved" value="Approved">
                <label for = "notapproved">Not Approved:</label>
                <input type="checkbox" name="approved" id="approved" value="Not Approved">
            </fieldset>
            
            <input type="submit">
        </form>
    <?php } ?>

            
            <?php if($_SESSION['role'] == 'manager')
        {   
        ?>
        <form method="GET" action="saveform.php">
            <fieldset>
                <legend>Section A</legend>
                <?php
                echo "<label for='name'>Name: </label>";
                echo "<input type='text' name ='name'  id='name' value = '$name' disabled>";
                echo "<label for='gender'>Gender: </label>";
                echo "<input type='radio' name ='gender'  id='gender' value='M'"; if($gender=="M"){echo "checked disabled";} echo" disabled >M";
                echo "<input type='radio' name ='gender'  id='gender' value='F' "; if($gender=="F"){echo "checked disabled";} echo" disabled >F<br>";
                echo "<label for='address'>Address:</label>";
                echo "<input type='text' name='address' id='address' value='$address' disabled><br>";
                echo "<label for='country'>Country: </label>";
                echo "<select name='country' disabled>";
                echo"<option value='China'"; if($country=="China"){echo "selected";} echo">China</option>";
                echo"<option value='Indonesia'"; if($country=="Indonesia"){echo                 "selected";} echo">Indonesia</option>";                   
                echo"<option value='Malaysia'"; if($country=="Malaysia"){echo "selected";} echo">Malaysia</option>";
                echo"<option value='Thailand'"; if($country=="Thailand"){echo "selected";} echo">Thailand</option>";
                echo"<option value='Singapore'"; if($country=="China"){echo "selected";} echo">Singapore</option>";
                echo"<option value='Brunei'"; if($country=="Brunei"){echo "selected";} echo">Brunei</option>";
                echo"</select>" ;
                    ?>
            <fieldset>
                <legend>Section B</legend>
                <label for="file1">File 1:</label>
                <?php 
                echo"<input type='file' name='file1' id='file1' value='$file1' disabled>" ;
                echo"<label for='verify1'>Verified:</label>";
                echo"<input type='checkbox' name='verify1'><br>";
                echo"<label for='file2'>File 2:</label>";
                echo"<input type='file' name='file2' id='file2' value='$file2' disabled>"
            ?>
                <label for="verify2">Verified:</label>
                <input type="checkbox" name="verify2">
            </fieldset>

            <fieldset>
                <legend>Section C</legend>
                <label for="name">Description: </label>
                <?php 
                    echo"<textarea name='description' disabled>$description</textarea>"; 
                ?>
            </fieldset>

            <fieldset>
                <legend>Section D</legend>
                <label for="name">Reason: </label>
                <?php echo"<textarea name='reason' disabled>$reason</textarea><br>"; ?>
                <label for = "approved">Approved:</label>
                <input type="checkbox" name="approved" id="approved" value="Approved">
                <label for = "notapproved">Not Approved:</label>
                <input type="checkbox" name="approved" id="approved" vale="Not Approved">
            </fieldset>
            
            <input type="submit">
        </form>
    <?php } ?>
    </body>
    </html>
