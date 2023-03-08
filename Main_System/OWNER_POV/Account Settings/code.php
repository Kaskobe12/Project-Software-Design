<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/Main_System/config.php';

if(isset($_POST['Update-user']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $pass = md5($_POST['password']);

    $query = "UPDATE user_form SET name='$name', email='$email', number='$number', password='$pass' WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: ../../logout.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: ../../logout.php");
        exit(0);
    }

}

?>