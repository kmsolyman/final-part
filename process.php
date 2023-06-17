<?php
include('connect.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["id"]);
    $type = mysqli_real_escape_string($conn, $_POST["username"]);
    $author = mysqli_real_escape_string($conn, $_POST["email"]);
    $description = mysqli_real_escape_string($conn, $_POST["password"]);
    $sqlInsert = "INSERT INTO users(id,username,email,password) VALUES ('$title','$author','$type', '$description')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:forgate.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["id"]);
    $type = mysqli_real_escape_string($conn, $_POST["username"]);
    $author = mysqli_real_escape_string($conn, $_POST["email"]);
    $description = mysqli_real_escape_string($conn, $_POST["password"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE users SET id = '$title', username = '$type', email = '$author', password = '$description' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Book Updated Successfully!";
        header("Location:forgate.php");
    }else{
        die("Something went wrong");
    }
}
?>