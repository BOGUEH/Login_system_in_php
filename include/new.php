bigupil

Pa$$w0rd!




} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9]*$/", $username)) {
header("Location:../login_system/signup.php?error=invalidEmail&username=" . $username);
exit();
} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
header("Location:../login_system/signup.php?error=invalidusernamel&email=" . $email);
exit();
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
header("Location:../login_system/signup.php?error=invalidemail&username=" . $username);
exit();
} else if ($password !== $passwordrepeat) {
header("Location:../login_system/signup.php?error=passwordnotmatch&username" . $username . "&email=" . $email);
exit();
} else {
$sql = "SELECT username FROM users WHERE username =?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location:../login_system/signup.php?error=sqlerror");
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultcheck = mysqli_stmt_num_rows($stmt);
    if ($resultcheck > 0) {
        header("Location:../login_system/signup.php?error=usernameexist&email=" . $email);
        exit();
    } else {
        $sql =  "INSERT INTO users (username, email, password) VALUES (? ,? ,? )";

        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../login_system/signup.php?error=sqlerror");
            exit();
        } else {
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            var_dump($hashedpassword);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpassword);
            mysqli_stmt_execute($stmt);

            header("Location:../login_system/index.php?signup=success");
            exit();
        }
    }
}
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}  else{
header("Location:../login_system/signup.php?");
exit();
}

?>