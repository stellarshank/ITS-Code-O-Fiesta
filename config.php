<?php
    
$server= "localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password,'root');
if(!$con){
    die("Error : Connection not made due to".mqsqli_connect_error());
}

?>
