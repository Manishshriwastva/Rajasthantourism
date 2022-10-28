<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "myminiproject";
//db connection
$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
    // echo "success";
}else{
    echo "error in connection";
}
