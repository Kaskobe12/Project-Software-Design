<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/Main_System/config.php';

if(isset($_POST['submit'])){

    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $comadd = mysqli_real_escape_string($conn, $_POST['comadd']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $rate = mysqli_real_escape_string($conn, $_POST['rate']);
    $timeopen = mysqli_real_escape_string($conn, $_POST['timeopen']);
    $slots = mysqli_real_escape_string($conn, $_POST['slots']);
    $vehiclety = mysqli_real_escape_string($conn, $_POST['vehiclety']);
    $cnumber = mysqli_real_escape_string($conn, $_POST['cnumber']);
  
  
    $query = "INSERT INTO park_info (street, comadd, description, rate, timeopen, slots, vehiclety, cnumber) VALUES ('$street','$comadd','$description','$rate','$timeopen','$slots','$vehiclety','$cnumber')";
  
    $query_run = mysqli_query($conn, $query);
  
    if($query_run){
      $_SESSION['message'] = "Student Created Successfully";
      header("Location: park_info.php");
      exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: park_info.php");
        exit(0);
    }
  
  };

?>