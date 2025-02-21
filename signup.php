<?php
include("include/signup.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <div class="container text-center pt-5" style="width: 30rem;">
        <div class="card row justify-content-center card-body">
            <h1> sign up page</h1>

            <form action="signup.php" method="POST">
                <div class="mb-3">
                   
                    <input type="text" class="form-control" name="username" placeholder="user name">
                </div>
                <div class="mb-3">
                    
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="mb-3">
                    
                    <input type="password" name="password" class="form-control"  placeholder="password">
                </div>
                <div class="mb-3">
                  
                    <input type="password" name="repeatpassword" class="form-control" placeholder="repeat password">
                </div>

                <button type="submit" name="submit_signup" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>



</body>

</html>