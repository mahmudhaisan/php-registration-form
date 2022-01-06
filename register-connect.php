<?php

require_once('db-connection.php');

if ($_POST['submit']) {
    //taking input values from users
    $user_name = $_POST['fullname'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];

    // assigning values in database table
    $sql = "INSERT INTO registration (username, email, phone, password)
    VALUES ('$user_name', '$user_email', '$user_phone' , '$user_password')"; // need quotation

    // connect and send data in database table
    mysqli_query($connection, $sql);
}
