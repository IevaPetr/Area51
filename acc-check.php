<?php

session_start();

$user = $_SESSION['uname'];
if ($user)
{
    echo"

    <form action='account.php' method='POST'>

    Old pass: <input type='text' name='oldpassword'><p>
    New: <input type='password' name='newpassword'><br>
    Rep new: <input type='password' name='repeatnewpassword'><p>
    <input type='submit' name='submit' value='change'>


    </form>

    "
}
else 
die("ne");
?>
/*
$id = $_SESSION["id"];/* userid of the user 
$con = mysqli_connect('localhost','root','','register') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT *from users WHERE id='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["password"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
    $newPassword = md5($newPassword);
mysqli_query($con,"UPDATE users set password='" . $_POST["newPassword"] . "' WHERE id='" . $id . "'");
//$message = "Password Changed Sucessfully";

header("Location: account.php?success=Your account has been updated successfully");

} else{
 //$message = "Password is not correct";
 header("Location: account.php?error=unknown error occurred");
 
}
}*/
