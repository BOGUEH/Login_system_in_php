<?php
if (isset($_POST["signin-submit"])) {

    require("connect.inc.php");

    $emailid = $_POST['emailid'];
    $password = $_POST['password'];

    if (empty($emailid) || empty($password)) {
        header("Location:../index.php?error=emptyfield");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email=? or username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../index.php?sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $emailid, $emailid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passwordcheck = password_verify($password, $row['password']); //note that this return a boolean

                if ($passwordcheck === false) {
                    header("Location:../index.php?error=wrongpassword");
                    exit();
                } else if ($passwordcheck === true) {
                    session_start();
                    $_SESSION["Id"] = $row["id"];

                    $_SESSION["username"] = $row["username"];

                    header("Location:../index.php?login=success");
                    exit();
                }
            }else{
                header("Location:../index.php?error=nouser");
                exit();
            }
        }
    }
}
