<?php
require 'dbConnect.php';

if (isset($_POST['submit'])) {
    // post form submitted data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['Destination'];
    $message = $_POST['message'];

    // query to insert data
    $query = "INSERT into contacts(`name`,`email`,`mobile`,`Destination`,`message`) VALUES ('$name','$email','$mobile','$Destination','$message')";

    // running query to insert data in db
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>alert('Thanku for contact us'); window.location.href='index.php#Home';</script>";
    } else {
        echo "<script>alert('Error in sending message'); window.location.href='index.php#Home';</script>";
    }
} else {
    header("Location:index.php#Home");
}
