<?php
session_start();
include("connection.php");
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    echo "Hello Mr ".$user;
    echo '
    <a href="logout.php"><input type="submit" class="btn btn-primary" value="LogOut"></a>
    ';
}
else{
    echo "Login First";
}
?>