bigupil

Pa$$w0rd!

else if ($passwordcheck === true) {
                    session_start();
                    $_SESSION["Id"] = $row["id"];
                    
                    $_SESSION["username"] = $row["username"];

                    header("Location:../index.php?login=success");
                    exit();
                }