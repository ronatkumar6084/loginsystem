<?php
$servername="localhost";
$username="root";
$password="";
$database="users";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("sorry we fail to connect:" . mysqli_connect_error());
}
// else{
//     echo "Success<br>";
// }

?>