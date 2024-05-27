<?php
    $conn = mysqli_connect('localhost', 'root', '', 'youtubeuserdata');

    // if($conn){
    //     echo "Connected Successfully";
    // }
    // else{
    //     echo "DB NOT Connected";
    // }

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO userinfodata(user, email, mobile, comment)
    VALUES('$user', '$email', '$mobile', '$comment')";

    $run = mysqli_query($conn, $query);
    if($run){
        echo "<script>alert('Thank You For Contact Us.');window.location.href='index.php';</script>";
    }
    else{
        echo "Sorry Something Went Wrong....(";
    }

    // header('location:index.php');
?>