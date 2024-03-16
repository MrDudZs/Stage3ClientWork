<?php
$targetDirectory = "uploads/";
$targetFile = $targetDirectory.basename($_FILES['file']['name']);
$uploadSuccess = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

if ($uploadSuccess){
    echo "File Uploaded Successfully";
}

else{
    echo "Failed";
}