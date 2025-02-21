<?php 
    require("./include/signin.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Contact us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="./include/signin.inc.php" method="POST">
                    <input class="form-control me-2" type="search" name="emailid" placeholder="Email">
                    <input class="form-control me-2" type="password" name="password" placeholder="password">
                    <button class="btn btn-outline-primary" name="signin-submit" type="submit">signin</button>
                </form>
                <button class="btn btn-success"  name="Logout" type="submit">Logout</button>
                
                <ul class="navbar-nav me-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
        
</body>
</html>