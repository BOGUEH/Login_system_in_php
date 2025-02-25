<?php

include_once("./include/connect.inc.php");
include_once("logins.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD FILE</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    $usercheck = mysqli_num_rows($result);
    if ($usercheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];

            $sqlimg = "SELECT * FROM profileimg";
            $resultimg = mysqli_query($conn, $sqlimg);

            while ($rowimage = mysqli_fetch_assoc($resultimg)) {
                echo "<div>";
                if ($rowimage['status'] == 0) {
                    echo " <img src='upload/defaultprofile.png' alt=''>";
                } else {
    
                    echo " <img src='upload/profile".$id.".jpg' alt=''>";
                }
                echo "</div>";
            }
            echo $row['username'];
        }
      
    } else {
        echo "there are no users yet";
    }
    ?>


    <?php
    if (isset($_SESSION["id"])) {

        echo "you are  login ";
        if ($_SESSION["id"] == 1) {
        }

        echo "<form action='./include/upload.inc.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload'> 
        <button type='submit' name='file-upload'>UPLOAD FILE</button>
     </form>";
    } else {
        echo "you are not login";
        echo ' <form action="signup.upload.php" method="post">
        <input type="text" name="firstname" placeholder="first name">
        <input type="text" name="lastname" placeholder="last name">
        <input type="text" name="username" placeholder="user name">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit-signup">signup</button>
    </form>';
    }


    ?>


    <p>login as users</p>
    <form action="logins.php" method="post">
        <button type="submit" name="submit-login">login</button>
    </form>
<?php 
include_once("./uploadLogout.php");
?>

    <p>logout as users</p>
    <form action="uploadLogout.php" method="post">
        <button type="submit" name="submit-logout">logout</button>
    </form>
</body>

</html>