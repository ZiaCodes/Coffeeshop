<?php
$title = 'Upload New Images';
$content ="<form id='uploadimg' action='' method='post' enctype='multipart/form-data'>
<div id='fileupload'>
<lable for='file'style='color:#ff7700;font-weight:bold;'>File Name: </lable>
<input type='file' name='file' id='file'style='color:#ff7700;'>
<input id='upload' type='submit' name='Upload' value='UPLOAD'> </div>
</form>";
if(isset($_POST['Upload']))
{
    $fileType = $_FILES['file']['type'];
    if(($fileType == 'image/gif') || ($fileType == 'image/jpeg') ||    
        ($fileType == 'image/jpg') || ($fileType == 'image/png'))
    {
        if(file_exists('Image/Coffee/'.$_FILES['file']['name']))
        {
            echo "File Already exists";
        }
        else 
        {
            move_uploaded_file($_FILES['file']['tmp_name'], 'C:/xampp/htdocs/Coffeeweb/images/Coffee/'.$_FILES['file']['name']);
            echo 'Uploaded in '.'C:/xampp/htdocs/Coffeeweb/images/Coffee/'.$_FILES['file']['name'];
        }
    }
}
require 'template.php';
?>