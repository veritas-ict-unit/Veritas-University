<?php
include "connection.php";

include "validate_admin.php";
include "header.php";
include "admin_navbar.php";
include "admin_sidebar.php";

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	
        /*
         * Insert image data into database
         */
        
         //Create connection and select DB
         $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $conn->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully. <a href='upload.php'>Upload More</a>";
        }else{
            echo "File upload failed, <a href='upload.php'>please try again</a>.";
        } 
    }else{
        echo "You have not selected any image. <a href='upload.php'>please try again</a>.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Refresh" content="3; url =./slider.php"/>
</head>
<body>
    
</body>
</html>