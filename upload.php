<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD FILE</title>
</head>
<body>
        <form action="./include/upload.inc.php" method="post" enctype="multipart/form-data">
            <input type="file" name="upload"> 
            <button type="submit" name="file-upload">UPLOAD FILE</button>

        </form>
</body>
</html>