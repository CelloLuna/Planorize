<?php 
require_once("config.php");

//Username Availibility Check
if(!empty($_POST["username"])) {
    $uname = $_POST["username"];
    $sql = "SELECT Username From Users WHERE Username=:username";
    $query = $dbh -> prepare($sql);
    $query -> bindParam(":username",$uname, PDO::PARAM_STR);
    $query -> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if ($query -> rowCount() > 0) {
        echo "<span style='color:red'> Username Already Exists.</span>";
    } else{
        echo "<span style='color:green'> Username Available</span>";
    }
}

//Email Availibility Check
if (!empty($_POST["email"])) {
    $email = $_POST["email"];
    $sql = "SELECT Email FROM Users- WHERE Email=:email";
    $query = $dbh -> prepare($sql);
    $query -> bindParam(':email', $email, PDO::PARAM_STR);
    $query -> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if ($query -> rowCount() > 0) {
        echo "<span style='color:red'> Email Already Exists.</span>";
    } else{
        echo "<span style='color:green'> Email Available</span>";
    }
}
?>