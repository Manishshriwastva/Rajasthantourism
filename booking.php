<?php
require 'dbConnect.php';

if (isset($_POST['submit'])) {
    // post form submitted data
    $place = $_POST['place'];
    $guest = $_POST['guest'];
    $arrival_date = $_POST['arrival_date'];
    $leaving_date = $_POST['leaving_date'];

    // query to insert data
    $query = "INSERT into bookings(`place`,`guest`,`arrival_date`,`leaving_date`) VALUES ('$place','$guest','$arrival_date','$leaving_date')";
    // running query to insert data in db
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>alert('You booked successfully now you have to fill contact form '); window.location.href='index.php#contact';</script>";
    } else {
        echo "<script>alert('Error in booking'); window.location.href='index.php#contact';</script>";
    }
} else {
    header("Location:index.php#contact");
}
