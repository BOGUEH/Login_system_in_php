<?php 
session_start();    
include_once("./connect.inc.php");
$id = $_SESSION["id"];


    if(isset($_POST['file-upload'])) {
        $file = $_FILES['upload'];
        
        $filename = $file['name'];
        $filesize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $filetype = $file['type'];
        $fileerror = $file['error'];

       $fileExt = explode('.', $filename);//the explode function slipt the name of the file according to the value you provided. if the string or symbol you provided appear 5 times the name will be splited accordingly
        $actualFileExt = strtolower(end($fileExt));
       
        $allowedExt = ['jpg','png','jpeg','pdf'];

        if(in_array($actualFileExt, $allowedExt)) {
            if($fileerror==0) {
                $fileNewName = 'profile'.$id.'.'.$actualFileExt;
                $fileDestination ='../upload/'.$fileNewName;
                move_uploaded_file($fileTmp, $fileDestination);

                $sql = 'UPDATE profileimg SET status = 1 WHERE user_id = "$id"';
                $result = mysqli_query($conn, $sql);


                header('Location:../upload.php?uploaded%successfully');
            }
            
            
        }   else{
           echo "you cannot upload this file";
        }
       
    }

?>