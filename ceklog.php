<?php
include "connect.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql = mysqli_query(SELECT * FROM cus WHERE username = '".$username"' AND password = '".$password"') or die(mysqli_error());

if(mysqli_num_rows($sql)==0) {
    echo '<script language = "javascript">'
    alert ("Username atau Password Salah!"); document.location="pweb.php";</script>;
} else {
    echo '<script language = "javascript">'
    alert ("Anda Berhasil Login!"); document.location="hal.php";</script>;
}  
?>