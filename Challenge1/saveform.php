<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
    
include ('config.php');
 $result = $mysqli->query("SELECT * from formsdetail");
if($result) {
    while($obj = $result->fetch_object()){
        $id = $obj->form_id;
    }
}
$name = $_GET["name"];
$gender = $_GET["gender"];
$address = $_GET["address"];
$country = $_GET["country"];
$description = $_GET["description"];
$reason = $_GET["reason"];
$file1 = $_FILES["file1"]["name"];
$file1 = $_FILES["file2"]["name"];
$file1verify = $_GET["verify1"] ; 
$file2verify = $_GET["verify2"] ;
$approve = $_GET["approved"] ;

$mysqli->query("UPDATE `formsdetail` SET `name` = '$name', `gender` = '$gender', `Address` = '$address', `country` = '$country', `Description` = '$description', `approve` = '$reason', `file1verify` = '$file1verify', , `file2verify` = '$file2verify', `file1verify` = '$approve' WHERE `formsdetail`.`form_id` = '$id'");
                                    
mysqli_close($mysqli);
header("location:index.php");

?>