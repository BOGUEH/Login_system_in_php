<?php 

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
                $fileNewName = uniqid().'.'.$actualFileExt;
                $fileDestination ='../upload/'.$fileNewName;
                move_uploaded_file($fileTmp, $fileDestination);
                header('Location:../upload.php?uploaded%successfully');
            }
            

        }   else{
           echo "you cannot upload this file";
        }
       
    }

?>