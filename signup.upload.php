<?php 
include_once("./include/connect.inc.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO posts (first_name, last_name, username, pasword) VALUE ('$firstname', '$lastname','$username','$password');";
$result = mysqli_query($conn, $sql);

$sql =  "SELECT * FROM posts WHERE username ='$username'AND first_name = '$firstname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['id'];
        $sql = "INSERT INTO profileimg (user_id, status) VALUE ('$user_id', '0')";

        mysqli_query($conn, $sql);
        header("Location:./upload.php");
    }
}
?>