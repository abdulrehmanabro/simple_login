<?php
$con = mysqli_connect("localhost:3307","root","","practice");
if(!$con){
    echo "Error". mysqli_connect_error();
}
$con->close();
?>
