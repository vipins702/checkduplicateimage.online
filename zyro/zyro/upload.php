<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if(empty($_FILES["fileToUpload"]["name"])){
$message = "Please choose file to upload.";
//ob_start();
echo "<script type='text/javascript'>alert('$message');</script>";
//header("Location: http://imagesearch.online/");
//ob_end_flush();
//exit;
}
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = ($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    //echo dirname(__FILE__);
    //echo dirname(__FILE__)+$target_file;
    $uploadOk = 0;
}*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    //session_destroy();
    //session_start();
    
    //session_start();
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //echo "Location: https://www.google.com/searchbyimage?&image_url=http://imagesearch.online/uploads/". basename( $_FILES["fileToUpload"]["name"])."";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    $id="http://imagesearch.online/uploads/". basename( $_FILES["fileToUpload"]["name"])."";
    $_SESSION['id'] = $id;
    //$_POST['a']=$id;
    //echo $_SESSION['id'];
    //http://imagesearch.online/uploads/city.jpg
    //header("Location: https://www.google.com/searchbyimage?&image_url=http://imagesearch.online/uploads/". basename( $_FILES["fileToUpload"]["name"]).""); 
    header("Location: http://imagesearch.online/Search.php"); 
exit();
}
?>