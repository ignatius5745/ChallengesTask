<!DOCTYPE html>
<html lang="en">

  <head>
  </head>
  <header>
  </header>

  <body>
    <?php
          if(session_id() == '' || !isset($_SESSION)){session_start();}

          include ('config.php');

          if(!isset($_SESSION["full_name"])) {
              header("location:login.php");
          }
      
                echo $_SESSION['full_name'];
      
                echo"<a href='logout.php'> Log Out</a><br>
                <a href='form.php'>Add</a>";
                
        if($_SESSION['role'] == 'employee')
        {   
            ?>

      
        <table>
            <tr>
                <th>Owner</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            
            <?php
              $fullname = $_SESSION['full_name'];
              $result = $mysqli->query("SELECT * from forms where owner = '$fullname' ");
              if($result) {
                while($obj = $result->fetch_object()) {
                  echo '<tr>';
                  echo '<td>'.$obj->owner.'</td>';
                  echo '<td>'.$obj->Date.'</td>';
                  echo '<td>'.$obj->Status.'</td>';  
                  if ($obj->Status != 'Not Approved')
                  {
                      echo '<td><a href="editform.php?form_id='.$obj->form_id.'"><button disabled>Edit</button></a></td>';
                  }
                  else
                  {
                      echo '<td><a href="editform.php?form_id='.$obj->form_id.'"><button>Edit</button></a></td>';

                  }
                  echo '<td><a href="deleteform.php?form_id='.$obj->form_id.'"><button onclick="if(!confirm(\'Are you sure you want to delete this stock?\')) return false;">Delete</button></a></td>';
                  echo'</tr>';
                }
              }
        }
            ?>

        </table>
      
       <?php
       if($_SESSION['role'] == 'manager')
        {   
            ?>

      
        <table>
            <tr>
                <th>Owner</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            
            <?php
              $fullname = $_SESSION['full_name'];
              $result = $mysqli->query("SELECT * from forms");
              if($result) {
                while($obj = $result->fetch_object()) {
                  echo '<tr>';
                  echo '<td>'.$obj->owner.'</td>';
                  echo '<td>'.$obj->Date.'</td>';
                  echo '<td>'.$obj->Status.'</td>';  
                  if ($obj->Status == 'Not Approved' )
                  {
                      echo '<td><a href="editform.php?form_id='.$obj->form_id.'"><button disabled>Edit</button></a></td>';
                  }
                  else
                  {
                      echo '<td><a href="editform.php?form_id='.$obj->form_id.'"><button>Edit</button></a></td>';

                  }
                    
                  echo '<td><a href="deleteform.php?form_id='.$obj->form_id.'"><button class="btn" onclick="if(!confirm(\'Are you sure you want to delete this stock?\')) return false;">Delete</button></a></td>';
                  echo'</tr>';
                }
              }
       }
            ?>


        
      <?php
       if($_SESSION['role'] == 'admin')
        {   
            ?>

      
        <table>
            <tr>
                <th>Owner</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            
            <?php
              $fullname = $_SESSION['full_name'];
              $result = $mysqli->query("SELECT * from forms");
              if($result) {
                while($obj = $result->fetch_object()) {
                  echo '<tr>';
                  echo '<td>'.$obj->owner.'</td>';
                  echo '<td>'.$obj->Date.'</td>';
                  echo '<td>'.$obj->Status.'</td>';  
                  echo '<td><a href="editform.php"><button name="edit">Edit</button></a></td>';
                    
                  echo '<td><a href="deleteform.php?form_id='.$obj->form_id.'"><button class="btn" onclick="if(!confirm(\'Are you sure you want to delete this stock?\')) return false;">Delete</button></a></td>';
                  echo'</tr>';
                }
              }
       }
            ?>

        </table>
  </body>
</html>
