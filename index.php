<?php
include 'header.php'

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

    <div class="text-center">
    <?php 
    
    if(isset($_SESSION["Id"])){
       Echo "<p>you are login!</p> " ;
    }else{
        Echo "<p>you are logout!</p> " ;
    }
    
    
    ?>
    </div>



</body>

</html>