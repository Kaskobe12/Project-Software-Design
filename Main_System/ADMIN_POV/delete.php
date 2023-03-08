<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Main_System/config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from 'user_form' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "Deleted successfull";
        header('location:user-manage.php');
    }else{
        die(mysqli_error($conn));
    }

}

?>